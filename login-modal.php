<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ($result->num_rows == 0) {
    $_SESSION['message'] = "User with that email doesn't exist";
} else {
    $user = $result->fetch_assoc();
    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];

        $_SESSION['logged_in'] = true;

        header("location: thesparkng.com/home");
    }
}
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
?>


<style>
  @media all  and (min-width: 700px) {
    .magazine-image {
      height: 300px;
      width: auto;
    }
  }

  @media all  and (min-width: 900px) {
    .magazine-image {
      height: 300px;
      width: auto;
    }
  }

  .form-input {
    border-radius: 2px;
    border: 1px solid rgba(10, 10, 10, 0.29);
    padding-left: 16px;
    padding-right: 16px;
  }

  ::placeholder {
    font-size: 16px;
    color: rgba(10, 10, 10, 0.55);
  }

</style>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!--      <div class="modal-header">-->
      <!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
      <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
      <!--          <span aria-hidden="true">&times;</span>-->
      <!--        </button>-->
      <!--      </div>-->
      <div class="modal-body">
        <div class="d-flex my-4 justify-content-center">
          <div class="">
            <span class="d-block text-center text-capitalize text-24">Sign Up to Get Access</span>

          </div>
        </div>
        <div class="d-flex justify-content-center">
          <form class="px-4 mb-5" action="register-user.php" method="post">
            <input class="form-input w-100 mt-3 mb-2" id="email" type="text" name="eamil" placeholder="EMAIL"/>
            <input class="form-input w-100 mt-3 mb-2" id="password" type="password" name="email"
                   placeholder="PASSWORD"/>
            <button type="submit"
                    class="w-100 button button-main d-flex mt-3 justify-content-center text-uppercase">
<!--              <a-->
<!--                  href="/magazine/read.php" target="_blank">-->
                CONTINUE
<!--              </a>-->
            </button>
          </form>
          <div class="d-flex text-20 my-3 justify-content-center">Don't have an account? <a class="text-pry"
                                                                                            href="connect.php"
                                                                                            target="_blank">Sign Up</a>
          </div>
<!--          <div class="d-flex my-3 justify-content-end"><a data-toggle="modal"-->
<!--                                                          data-target="#forgotpassword" class="text-tert text-20 font-weight-bold" href="forgot-password.php">Forgot-->
<!--              Password</a></div>-->
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>