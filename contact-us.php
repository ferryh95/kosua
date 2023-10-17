<?php include('header.php') ?>
<main>
    <div class="top-banner-contact text-center">
        CONTACT
    </div>

    <div class="faq-top text-center">
        Online Form
    </div>

    <div class="faq-text-2 text-center">
        If you have any questions, <br>
        please contact us using the form below.
    </div>

    <div class="faq-form">
        <form action="" method="get" class="faq-form-tag">
            <div class="form-tag">
                <label for="name">Full Name </label>
                <input type="text" name="name" id="name" class="i-text" required />
            </div>
            <div class="form-tag">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="i-text" required />
            </div>
            <div class="form-tag">
                <label for="post-title">Post Title</label>
                <input type="text" name="post-title" id="post-title" class="i-text" required />
            </div>
            <div class="form-tag">
                <label for="post-description">Post description</label>
                <textarea id="post-description" name="post-description" rows="5" cols="33" required></textarea>
            </div>
            <div class="form-tag">
                <input type="submit" value="Send" class="i-button" />
            </div>
        </form>

    </div>
    <!--mobile ver-->
    <div class="m-com-contact text-center">
        <div class="m-com-text-1">
            Dan Co., Ltd.//all rights reserved
        </div>
        <div class="m-com-button">
            <a href="contact-us.php">
                <button>
                    Contact us
                </button>
            </a>
        </div>
    </div>
    <!--desktop ver-->
    <div class="com-contact text-center">
        <div class="com-text-1">
            Company
        </div>
        <div class="com-text-2">
            <span class="com-text-2-1">This site is created by</span>
            <span class="com-text-2-2">Dan Co., Ltd.</span>
        </div>
        <div class="com-button">
            <a href="contact-us.php">
                <button>
                    Contact us
                </button>
            </a>
        </div>
    </div>
</main>
<?php include('footer.php') ?>