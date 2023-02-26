<?php
    class Model2{
        private $server = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'project';
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connection failed' .$ex->getMessage();
            }       
        }

        //INSERT, FETCH, EDIT, DELETE

        public function insert() {
            if (isset($_POST['submit'])) {
                // Sanitize user inputs to prevent SQL injection attacks
                $name1 = $this->conn->real_escape_string($_POST['name']);
                $image_url1 = $this->conn->real_escape_string($_POST['image_url']);
                $paragraph1 = $this->conn->real_escape_string($_POST['paragraph']);

                // Prepare the SQL statement with placeholders to prevent SQL injection attacks
                $query = "INSERT INTO news (Name2, ImageURL2, Paragraph2) VALUES (?, ?, ?)";
                $stmt = $this->conn->prepare($query);
                $stmt->bind_param("sss", $name1, $image_url1, $paragraph1);

                if ($stmt->execute()) {
                    echo "<script>alert('Records added successfully');</script>";
                    echo "<script>window.location.href = 'news.php';</script>";
                } else {
                    echo "<script>alert('Failed to add records');</script>";
                    echo "<script>window.location.href = 'news.php';</script>";
                }
            }
        }

        
        public function fetch(){
            $data = null;
            $query = "SELECT * FROM news";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
 
        public function delete($id){
 
            $query = "DELETE FROM news where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function edit($id) {
            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM news WHERE id = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
                }
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE news SET Name1='$data[Name1]', ImageURL1='$data[ImageURL1]', Paragraph1='$data[Paragraph1]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function fetchById($id) {
            $data = null;
            $query = "SELECT * FROM news WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                $data = $sql->fetch_assoc();
            }
            return $data;
        }
        
        public function fetchAll(){
        $data = array();
        $query = "SELECT * FROM news";
        $result = $this->conn->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
        }
    }
?>