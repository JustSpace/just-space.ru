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
            <input class="order__input" type="text" name="fio" id="fio" placeholder="Ваше имя" required>
          </td>
        </tr>
        <tr>
          <td>
            <input class="order__input" type="text" name="tel" id="tel" placeholder="Телефон" required>
          </td>
        </tr>
        <tr>
          <td>
            <input class="order__input" type="email" name="email" id="email" placeholder="Email" required>
          </td>
        </tr>
        <tr>
          <td>
            <textarea class="order__textarea" name="description" id="description" placeholder="Расскажите о вашем проекте" required></textarea>
          </td>
        </tr>
        <tr>
          <td class="center-930px">
            <div class="buttons">
              <input class="order__button order__submit" type="submit" name="order_sub" id="order_sub" value="Заказать проект">
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
