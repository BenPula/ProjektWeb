<?php
    class Model{
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
                $name = $this->conn->real_escape_string($_POST['name']);
                $image_url = $this->conn->real_escape_string($_POST['image_url']);
                $paragraph = $this->conn->real_escape_string($_POST['paragraph']);

                // Prepare the SQL statement with placeholders to prevent SQL injection attacks
                $query = "INSERT INTO boxes (Name, ImageURL, Paragraph) VALUES (?, ?, ?)";
                $stmt = $this->conn->prepare($query);
                $stmt->bind_param("sss", $name, $image_url, $paragraph);

                if ($stmt->execute()) {
                    echo "<script>alert('Records added successfully');</script>";
                    echo "<script>window.location.href = 'boxes.php';</script>";
                } else {
                    echo "<script>alert('Failed to add records');</script>";
                    echo "<script>window.location.href = 'boxes.php';</script>";
                }
            }
        }
        
        public function fetch(){
            $data = null;
            $query = "SELECT * FROM boxes";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
 
        public function delete($id){
 
            $query = "DELETE FROM boxes where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function edit($id) {
            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM boxes WHERE id = ?");
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
 
            $query = "UPDATE boxes SET Name='$data[Name]', ImageURL='$data[ImageURL]', Paragraph='$data[Paragraph]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }

        public function fetchById($id) {
            $data = null;
            $query = "SELECT * FROM boxes WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                $data = $sql->fetch_assoc();
            }
            return $data;
        }
    }
?>