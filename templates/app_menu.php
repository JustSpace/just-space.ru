<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/ajax_alert_popup.php");
?>
<div class="app-menu">
  <article class="order app-menu__order">
    <form class="order__form" method="post">
      <table class="order__table">
        <tr>
          <td>
            <h2 class="order__title">Заказать проект</h2>
          </td>
        </tr>
        <tr>
          <td>
            <input class="order__input" type="text" name="app-fio" id="app-fio" placeholder="Ваше имя" required>
          </td>
        </tr>
        <tr>
          <td>
            <input class="order__input" type="text" name="app-tel" id="app-tel" placeholder="Телефон" required>
          </td>
        </tr>
        <tr>
          <td>
            <input class="order__input" type="email" name="app-email" id="app-email" placeholder="Email" required>
          </td>
        </tr>
        <tr>
          <td>
            <textarea class="order__textarea" name="app-description" id="app-description" placeholder="Расскажите о вашем проекте" required></textarea>
          </td>
        </tr>
        <tr>
          <td class="center-930px">
            <div class="buttons">
              <input class="order__button order__submit" type="submit" name="app-order_sub" id="app-order_sub" value="Заказать проект">
            </div>
          </td>
        </tr>
      </table>
    </form>
  </article>
  <div class="blind">
      <span class="blind__line1"></span>
      <span class="blind__line2"></span>
  </div>
</div>
