<template>
    <div id="login-page" class="flex-h">
        <div class="login-container flex-v center">
            <div class="login-title">
                <h1>Login</h1>
            </div>
            <div class="login-form">
                <div class="mb-30">
                    <input
                        class="form-ctrl input-solid login-input"
                        name=""
                        placeholder="Email"
                    />
                </div>
                <div class="mb-30">
                    <input
                        class="form-ctrl input-solid login-input"
                        name=""
                        placeholder="Password"
                    />
                </div>
                <div class="mt-50">
                    <a href="#" class="btn btn-navy-solid btn-login">Masuk</a>
                </div>
            </div>
            <div class="login-unsil">
                <div>
                    <p align="center">Atau login dengan</p>
                </div>
                <div class="flex-h center" style="margin-top: 15px">
                    <!--                <a href="#" class="btn btn-log-unsil btn-navy-border"></i>UNSIL Mail</a>-->
                    <img
                        src="../assets/google.png"
                        style="width: 20px; height: 20px; margin-right: 5px"
                    />
                    <button
                        v-on:click="loginUnsil"
                        href="{{Route('auth.google')}}"
                    >
                        UNSIL Mail
                    </button>
                </div>
            </div>
        </div>
        <div class="jumbotron-login">
            <!--      <article>-->
            <!--        <h1>Sistem Informasi Lab Riset<br>KK JKF</h1>-->
            <!--      </article>-->
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "LoginPage",
    methods: {
        loginFunction: function () {
            axios
                .get("http://localhost:8080/api/login/google", this.data, {
                    headers: { "Access-Control-Allow-Origin": "*" },
                })
                .then((response) => (this.contents = response));
            console.log(this.contents);
        },
        loginUnsil: function () {
            axios.get("/api/login/google");
        },
    },
};
</script>

<style>
@import "../assets/style/style.css";
</style>
