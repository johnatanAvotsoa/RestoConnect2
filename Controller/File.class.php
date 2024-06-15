<?php
class File {
    public $file;
    public function __construct($file){
        $this->file = $file ;
    }
    public function getName(){
        return $this->file["name"] ;
    }
    public function MoveFile(){
        $allowed_ext =  $allowed_ext = ["jpeg","jpg","png"];
        $file_name = $this->file["name"];
        $file_dir  = $this->file["tmp_name"];
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower(end($file_ext));
        $target_dir = "../public/image/$file_name";
        if(in_array($file_ext,$allowed_ext)){
            move_uploaded_file($file_dir,$target_dir);
        }else{
            echo 'format non supporté' ;
        }
    }
}

?>