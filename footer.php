  <section class="section cta">
    <div class="bg-grey section-cta">
      <img src="img/cta-img.png" alt="call to action" class="cta-image">
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
              <input id="user-phone" name="userphone" type="tel" class="input" placeholder=" " maxlength="30" required>
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


  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <svg class="footer-logo">
          <use href="img/sprite.svg#logo-dark"></use>
        </svg>
        <a href="tel:+79996861014" class="footer-phone">+7 (555) 686-10-14</a>
        <div class="footer-info-wrapper">
          <div class="footer-info">
            <svg class="footer-icon" width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-address">г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <div class="footer-info">
            <svg class="footer-icon" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-mail">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <ul class="footer-social">
          <li class="footer-social-item">
            <a href="#" class="footer-social-link">
              <svg class="footer-icon" width="24" height="24">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
          </li>
          <li class="footer-social-item">
            <a href="#" class="footer-social-link">
              <svg class="footer-icon" width="24" height="24">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.footer-top -->
    </div>
    <!-- /.container -->
    <div class="footer-seporator"></div>
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <div class="footer-menu-inner">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
            </ul>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu -->

        <ul class="footer-menu-bold">
          <li class="footer-menu-item-bold">
            <a href="#" class="footer-menu-link-bold">О компании</a>
          </li>
          <li class="footer-menu-item-bold">
            <a href="#" class="footer-menu-link-bold">Новости</a>
          </li>
          <li class="footer-menu-item-bold">
            <a href="#" class="footer-menu-link-bold">Контакты</a>
          </li>
        </ul>
        <!-- /.footer-menu-bold -->
      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->
    <div class="footer-seporator">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="copyright">&copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.</p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg class="footer-author-icon" width="52" height="11">
              <use href="img/sprite.svg#RUSO"></use>
            </svg>
          </div>
          <!-- /.footer-author -->
        </div>
      </div>
      <!-- /.container -->
    </div>
  </footer>
  <!-- /.footer -->


  <div class="modal">
    <div class="modal-content">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-close" data-toggle="modal">
        <svg class="close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с&nbsp;Вами в&nbsp;ближайшее время ответит на&nbsp;все интересующие
        вопросы и&nbsp;поможем даже в&nbsp;самых сложных случаях!
      </p>
      <form action="handler.php" method="POST" class="modal-form">
        <div class="input-group-wrapper modal-group-wrapper">
          <div class="input-group">
            <input id="modal-user-name" name="username" type="text" class="input" placeholder=" " maxlength="30" required>
            <label for="modal-user-name" class="input-group-label modal-group-label">Имя</label>
          </div>
          <div class="input-group">
            <input id="modal-user-phone" name="userphone" type="tel" class="input" placeholder=" " maxlength="30" required>
            <label for="modal-user-phone" class="input-group-label modal-group-label">Номер телефона</label>
          </div>
        </div>
        <div class="modal-form-footer">
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
  <!-- /.modal -->

  <div class="modal modal-thanks">
    <div class="modal-content">
      <a href="#" class="modal-close" data-toggle="modal">
        <svg class="close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <img src="" alt="" class="modal-thanks-icon">
      <h2 class="modal-title">Спасибо за заявку!</h2>
      <p class="modal-text">
        Наш менеджер свяжется с&nbsp;Вами в&nbsp;ближайшее время ответит на&nbsp;все интересующие вопросы и&nbsp;поможем даже в&nbsp;самых сложных случаях!
      </p>
      <a href="#" class="button modal-thanks-link">Вернуться на главную</a>
    </div>
  </div>
  <!-- /.modal modal-thanks -->



  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>