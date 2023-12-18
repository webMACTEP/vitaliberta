<main>
   <div class="container">
      <h1>Психологическое тестирование</h1>

      <div class="forms">
         <form action="">
            <div class="step01">
               <div class="descriptions">
                  <p>Тестирование позволяет оценить: траекторию становления личности, степень психологической
                     устойчивости
                     в
                     трудных жизненных ситуациях, факторы риска и ресурсы защиты личности при вовлечении в
                     зависимое
                     поведение. Вы может пройти тест самостоятельно, результаты будут продемонстрированы на
                     экране, а
                     можете
                     отправить специалисту для расшифровки и личностного консультирования.</p>
               </div>
               <div class="form-content">
                  <div class="wrapper">

                     <input name="soyad" type="text" placeholder="Фамилия">
                     <input name="ad" type="text" placeholder="Имя">
                     <input name="baba" type="text" placeholder="Отчество">
                     <input name="age" type="text" placeholder="Возраст">
                     <input name="email" type="text" placeholder="E-mail">

                     <div class="next btn01">Продолжить</div>
                     <div class="get-result">
                        <div class="title">Получение результата</div>
                        <div class="checkboxes">
                           <div class="item"> <input type="checkbox" id="option1" name="option1" value="1">
                              <label for="option1">Сразу</label><br>
                           </div>

                           <div class="item"><input type="checkbox" id="option2" name="option2" value="2">
                              <label for="option2">Отправить специалисту психологу</label><br>
                           </div>

                        </div>
                        <div class="next btn02">Продолжить</div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="step02">
               <h1>Hello, world!</h1>
            </div>
            <div class="form-content">
               <button type="submit" class="submit-test">Получить консультацию и расшифровку
                  профессиональным специалистом с рекомендациями</button>
            </div>
         </form>

      </div>
   </div>
</main>

<div class="modal-manager">

   <div class="modal-content">
      <div class="close"><svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57" fill="none">
            <rect x="13.4346" y="41.7193" width="40" height="2" transform="rotate(-45 13.4346 41.7193)" fill="black" />
            <rect x="14.8496" y="13.435" width="40" height="2" transform="rotate(45 14.8496 13.435)" fill="black" />
         </svg></div>
      <h2>Связаться с менеджером</h2>
      <?php echo do_shortcode('[contact-form-7 id="ba3ce48" title="Связаться с менеджером"]'); ?>
   </div>

</div>