<?php
include '../includes/header.php';
include '../includes/navbar.php';
?>


<div id="contact-section">
    <div id="contact-container" class="grid-container pt-5 pb-5">
        <div class="left-container">
            <div class="logo-container">
                <h1>LOGO NAME </h1>
                <p>Help your business to scale up by monitoring and managing your system.</p>
            </div>
        </div>
            
        <div class="right-container">
            <div class="logo-container">
                <h4>Get in Touch </h4>
                <p>Help your business to scale up by monitoring and managing your system.</p>
            </div>
                
            <div class="logo-container">
                <h4>Get in Touch </h4>
                <p>204 Zone 2 Tangos Baliwag, Baliuag, 3006 Bulacaninfo@chonggos.com+(63)955-103-8858</p>
            </div>
        </div>
    </div>
    <div class="sm-icons-container">
        <img class="social-media-icon" src="../design/images/facebook.png" alt="">
        <img class="social-media-icon" src="../design/images/instagram.png" alt="">
        <img class="social-media-icon" src="../design/images/youtube.png" alt="">
        <img class="social-media-icon" src="../design/images/twitter.png" alt="">
    </div>
    <div style="display: flex; justify-content: center; width: 100%;">
        <p style="padding:15px; border-right: 1px solid #f5f5f5;">Home</p>
        <p style="padding:15px; border-right: 1px solid #f5f5f5;">About us</p>
        <p style="padding:15px; border-right: 1px solid #f5f5f5;">Contacts</p>
        <p style="padding:15px;">Login</p>
    </div>
</div>





<div id="copyright">
    <h6 style="padding:5px;">Copyright © 2023 LogoName | All Rights Reserved.</h6>
</div>




<style>
    h1,p,h4{
        color: #f5f5f5;
    }

    #contact-section{
        background-color: #1c1c1c;
    }

    #contact-container{
        background-color: transparent;
        width: 100%;
        height: 90%;
    }
    #copyright{
        background-color: #FCBF4F;
        width: 100%;
        text-align: center;"
    }

    .grid-container{
        display: grid;
        grid-template-columns: 50% 50%;
    }

    .left-container{
        display: flex;
        justify-content: center;
        align-items: start;
    }

    .right-container{
        display: flex;
        justify-content: center;
        align-items: start;
    }

    .logo-container{
        width: 270px;
        padding: 10px;
    }

    .sm-icons-container{
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
    }

    .social-media-icon{
        width: 40px;
        margin: 0 15px 0 15px;
    }
    
</style>





<?
include '../includes/footer.php';
