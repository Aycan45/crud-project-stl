<?php 

    class AdminsController extends Admins{

        public function showAllAdmins(){

            $admins = $this->getAllAdmins();

            foreach((array) $admins as $admin){
            ?>
                <tbody>
                    <tr>
                    <td><?= $admin['username']?></td>
                    <td><?= hash("md5", $admin['password'])?></td>
                    <td><a href="./update-admin.php?id=<?= $admin["ID"]?>" class="btn btn-info">Update</a></td>
                    <td><a href="./crud-action/delete-admin-action.php?id=<?= $admin["ID"]?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                </tbody>

            <?php
            }

        }

        public function addAdmin($username, $password){
        
            if ($this->emptyInput($username, $password) == true) {
                header("location: ./admin-add.php?error=emptyinput");
                exit();
            }
            else
                $this->setAdmin($username, $password);
    
        }

        public function updateAdmin($id , $username, $password){
        
            if ($this->emptyInput($username, $password) == true) {
                header("location: ./admin-edit.php?error=emptyinput");
                exit();
            }
            else
                $this->editAdmin($id, $username, $password);
    
        }
    
        private function emptyInput($username, $password)
        {
    
            if (!$username) {
                return false;
            }
            if (!$password) {
                return false;
            }
        }
    

        public function deleteAdmin($id){

            $statement = $this->connect()->prepare("DELETE FROM users WHERE ID = :id");

            $statement->bindValue("id", $id, PDO::PARAM_INT);

            $result = $statement->execute();

            if ($result) {
                return true;
            }
            else{
                return false;
            }


        }

    }



?>