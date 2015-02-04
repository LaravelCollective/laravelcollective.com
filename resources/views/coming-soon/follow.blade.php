<!--// OPEN FOLLOW //-->
<section id="follow" class="scrn nobg">
  <fieldset class="wrapper">
    <legend align="center">Be first to learn about the launch</legend>
    <div class="body">
      <h3>Subscribe on newsletter</h3>
      <div class="descr wrapper-768">
        <p>We're working hard to get something amazing put together for you. Sign up for our newsletter and we'll make sure to fill you in with all the juicy details as soon as we're ready!</p>
      </div>

      <form action="/coming-soon/subscribe" method="post">
        <input type="hidden" name="_token" value="{{Session::getToken()}}"/>
        <input type="email" name="email" value="" placeholder="Enter your email" required>
        <input type="submit" value="Subscribe">
        <div>We don't spam because we're nice.</div>
      </form>

      <div class="loading"></div>
      <div class="response"></div>
    </div>
  </fieldset>
</section>
<!--// CLOSE FOLLOW //-->