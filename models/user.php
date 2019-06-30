<?php
class UserModel extends Model {
  public function register(){
    //sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['submit']){
      $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      $this->bind(':name', $post['name']);
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);
      $this->execute();
      //verify
      if($this->lastInsertId()){
        // redirect
        header('Location: '.ROOT_URL.'users/login');
      }
    }
    return;
  }

  public function login(){
    //sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['submit']){
      $this->query('SELECT * from users where email = :email AND password = :password');
      $this->bind(':email', $post['email']);
      $this->bind(':password', $password);

      $row = $this->single();

      if($row){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email']
        );
        // redirect
        header('Location: '.ROOT_URL.'shares');
      } else {
        echo 'incorrect login';
      }

    }
    return;
  }
}


 ?>
