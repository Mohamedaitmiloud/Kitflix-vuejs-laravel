<template>
<div class="uk-vertical-align  uk-overlay-panel uk-overlay-background">
                <div class=" uk-vertical-align-middle uk-text-center  uk-width-medium-3-10 uk-width-large-2-10 uk-container-center">
                    
                    <div class="uk-margin-large-bottom  uk-animation-reverse uk-animation-scale uk-animation-hover">
                        <img class="uk-margin uk-margin-remove" width="200" height="40" alt="logo" src="assets/img/logo.svg">
                    </div>
                    <form class=" uk-form">
                        <h2 class="uk-margin-large-bottom uk-text-muted">Log in</h2>
                        <div class="uk-form-row">
                            <div class="uk-form-icon uk-form-icon-flip uk-width-1-1">
                                <input type="text" class="uk-width-1-1" placeholder="Username">
                                <i class="uk-icon-user"></i>
                            </div>                    </div>
                            <div class="uk-form-row">
                                <div class="uk-form-icon uk-form-icon-flip uk-width-1-1">
                                    <input type="password" class="uk-width-1-1" placeholder="Password">
                                    <i class="uk-icon-lock "></i>
                                </div>                    </div>
                                <div class="uk-form-row uk-text-small">
                                    <label class="uk-float-left"><input type="checkbox"> Remember Me</label>
                                    <a class="uk-float-right uk-link " href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="uk-form-row">
                                    <a class="uk-width-1-1 uk-button uk-button-success uk-button-large" href="#">Log in</a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
