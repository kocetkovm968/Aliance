<section class="section cta">
  <div class="bg-grey section-cta">
    <picture class="cta-image">
      <source type="image/webp" srcset="img/cta-img.webp">
      <source type="image/png" srcset="img/cta-img.png">
      <img src="img/cta-img.png" alt="изображение формы">
    </picture>
    <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
        <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с&nbsp;Вами в&nbsp;ближайшее время ответит на&nbsp;все интересующие
          вопросы
          и&nbsp;поможем даже в&nbsp;самых сложных случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input id="user-name" name="username" type="text" class="input" placeholder=" " maxlength="30" required>
            <label for="user-name" class="input-group-label">Имя</label>
          </div>
          <div class="input-group">
            <input id="user-phone" name="userphone" type="tel" class="input phone-mask" placeholder=" " maxlength="30" required>
            <label for="user-phone" class="input-group-label">Номер телефона</label>
          </div>
        </div>
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к&nbsp;нам вы&nbsp;получаете не&nbsp;только профессиональную работу, но&nbsp;и&nbsp;абсолютную
              конфиденциальность информации!
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /.section cta -->