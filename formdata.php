<?php
mail("ita-win8@hotmail.com", "Message from visit", "User: $_POST[name] \nContent: $_POST[text]", "Content-type: text/plain; charset=utf-8");
?>
<FORM><INPUT type=button value="Your message has been sent" OnClick="location.href='guest_book.html'"></FORM>