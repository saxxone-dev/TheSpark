<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $ref_url = "https://";
    $ref_url .= $_SERVER['HTTP_HOST'];
    $ref_url .= $_SERVER['REQUEST_URI'];
} else {
    $ref_url = "http://";
    $ref_url .= $_SERVER['HTTP_HOST'];
    $ref_url .= $_SERVER['REQUEST_URI'];
}
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
        border: none;
        border-bottom: 1px solid black;
        padding-left: 0;
        padding-right: 16px;
    }

    ::placeholder {
        font-size: 14px;
        color: rgba(10, 10, 10, 0.55);
    }


</style>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <!--      <div class="modal-header">-->
            <!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
            <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--          <span aria-hidden="true">&times;</span>-->
            <!--        </button>-->
            <!--      </div>-->
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="">


                    </div>
                </div>
                <div class="row px-0">
                    <div class="col-12 col-lg-6 ">
                        <?php echo '<form class="px-4 mb-3" id="sign-in" action="../includes/login-script.php?referto='.$ref_url.'" method="post">'; ?>
                            <div class="py-1 d-flex justify-content-center d-lg-none">
                                <div>
                                    <img src="../../assets/images/a-logo.png" width="90px" alt="">
                                </div>
                            </div>
                            <div class=" mb-4 my-md-1 my-lg-4 text-center  font-weight-bold text-grey  text-capitalize pt-4 text-24">
                                Sign In to Get Access
                            </div>
                            <?php if (isset($_SESSION['message'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
                            } ?>


                            <input class="form-input w-100 mt-3 mb-2" id="emaillogin" type="text" name="emaillogin"
                                   placeholder="Email"/>
                            <input class="form-input w-100 mt-3 mb-2" id="passwordlogin" type="password"
                                   name="passwordlogin"
                                   placeholder="Password"/>
                            <div class="d-flex mt-3 justify-content-center">
                                <button type="submit" name="login-submit"
                                        class="button button-main py-2 px-4 shadow mt-3 justify-content-center text-uppercase br-0-8">

                                    Sign In
                                </button>
                            </div>
                        </form>
                        <?php echo '<form method="post" action="../includes/signup-script.php?referto='.$ref_url.'" id="sign-up"
                              class="px-4 hide-sign mb-3">' ;?>
                            <div class="py-1 d-flex justify-content-center d-lg-none">
                                <div>
                                    <img src="../../assets/images/a-logo.png" width="70px" alt="">
                                </div>
                            </div>
                            <div class="mt-lg-4 mb-2 text-center font-weight-bold text-grey text-capitalize text-22">
                                Sign Up to Get Access
                            </div>


                            <?php if (isset($_SESSION['message'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
                            } ?>

                            <input placeholder="First Name" required id="firstName" name="first_name" type="text"
                                   class="form-input w-100 bg-white text-black my-2"/>


                            <input placeholder="Last Name" required id="lastName" name="last_name" type="text"
                                   class="form-input w-100 bg-white text-black my-2"/>


                            <input placeholder="Email Address" required id="email" name="email" type="email"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <div class="pt-3">
                                <div class="select-box">

                                    <div id="select-option" class="options-container">

                                        <div class="option">
                                            <input type="radio" class="radio" id="insights" name="insights">
                                            <label for="insights">Access to Insights & Information</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="network" name="network">
                                            <label for="network">Access to Inspiring network</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="financial" name="financial">
                                            <label for="financial">Access to Financial resources</label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" class="radio" id="non-financial" name="non-financial">
                                            <label for="non-financial">Access to Non-financial resources</label>
                                        </div>
                                    </div>
                                    <div class="selected">
                                        <input class="border-0 p-0" id="access" value="Access Type" name="access_type"/>
                                    </div>

                                </div>
                            </div>

                            <input placeholder="Phone Number" required id="phone" name="phone" type="text"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <input placeholder="Password" required id="password" name="password" type="password"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <input placeholder="Confirm password" required id="confirm-password" name="confirm-password"
                                   type="password"
                                   class="form-input w-100 bg-white text-black my-2"/>

                            <div class="mt-2 d-flex justify-content-center">
                                <button type="submit" name="signup-submit"
                                        class="button br-0-8 shadow py-2 px-4 align-items-center cursor-pointer button-main d-flex mt-3 justify-content-center text-uppercase">
                                    <!--                        <b-spinner v-if="isLoading === true" small class="mr-2"></b-spinner>-->
                                    SIGN UP
                                </button>
                            </div>
                        </form>
                        <div id="sign-up-link" class="text-center px-md-4 px-lg-0 pb-4 my-3">Don&apos;t have an account&quest;
                            <span
                                    class="font-weight-bold cursor-pointer text-pry"
                                    onclick="toggleSignUp()">Sign Up</span>
                        </div>
                        <div id="sign-in-link" class="text-center hide-sign mt-1 mb-3">Already have an account? <span
                                    class="font-weight-bold cursor-pointer text-pry"
                                    onclick="toggleSignUp()">Sign in</span>
                        </div>
                        <!--          <div class="d-flex my-3 justify-content-end"><a data-toggle="modal"-->
                        <!--                                                          data-target="#forgotpassword" class="text-tert text-20 font-weight-bold" href="forgot-password.php">Forgot-->
                        <!--              Password</a></div>-->
                    </div>
                    <div class="col-12 d-none col-lg-6 d-lg-flex justify-content-center align-items-center  art-bg-modal">
                        <div>
                            <img src="../../assets/images/a-logo.png" width="90px" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>

    let signIn = document.getElementById("sign-in");
    let signUp = document.getElementById("sign-up");
    let sul = document.getElementById("sign-up-link");
    let sil = document.getElementById("sign-in-link")

    function toggleSignUp() {
        signIn.classList.toggle("hide-sign");
        signUp.classList.toggle("hide-sign");
        sul.classList.toggle("hide-sign");
        sil.classList.toggle("hide-sign");
    }


    let selected = document.querySelector(".selected")
    let optionsContainer = document.querySelector(".options-container")
    let optionsList = document.querySelectorAll(".option")

    selected.addEventListener('click', () => {
        optionsContainer.classList.toggle("active-option")
    })

    optionsList.forEach(el => {
        el.addEventListener('click', () => {
            document.getElementById("access").value = el.querySelector("label").innerText;
            optionsContainer.classList.remove("active-option")
        })
    })

</script>

