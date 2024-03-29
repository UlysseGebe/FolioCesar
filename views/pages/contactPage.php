<?php include '../views/partials/header.php' ?>
<div class="contact">
    <h1>Contact</h1>
    <form name="sentMessage" novalidate>
        <div>
            <label>Name</label>
            <input type="text" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
        </div>
        <div>
            <label>Email Address</label>
            <input type="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
        <div>
            <label>Message</label>
            <textarea rows="5" placeholder="Message" id="message" required data-validation-required-message="Please enter a message." style="min-height: 150px"></textarea>
        </div>
        <br>
        <div>
          <input type="submit"></input>
        </div>
      </form>
</div>
<?php include '../views/partials/footer.php' ?>