<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Список отчетов">
  <meta name="keywords" content="Список отчетов, Тептар, тептар">
  <link type="text/css" rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="side-menu.css">
  <link type="text/css" rel="stylesheet" href="header.css">
  <script type="text/javascript" src="./script.js"></script>
  <title>Список отчетов</title>
</head>
<body>

      <div class="menu">
      <?php include 'blocks'.DIRECTORY_SEPARATOR.'main.html'; ?>
        <div class="menu__footer">
          <span class="menu__footer__toggle">
            <a href="#">
              <img src="./assets/img/svg/toggle.svg">
              <span class="menu__footer__text">
                Свернуть панель
              </span>
            </a>
          </span>
        </div>
      </div>
      <div class="content">
        <header class="header">
          <div class="header__main">
            <div class="header__input">
              <img src="./assets/img/svg/search.svg">
              <input type="text" placeholder="Поиск">
            </div>
            <div class="user">
              <div class="user__notification">
                <img src="./assets/img/svg/notifications.svg" alt="vector">
              </div>
              <div class="user__info">
                <span class="user__info__avatar">
                </span>
                <span class="user__info__name">
                  <span>Ибрагим Грозный</span>
                  <span class="user__info__post">Районный сотрудник</span>
                </span>
                <span class="user__info__arrow">
                  <!--
                  html последовательность стрелки вниз вместо альтернативного текста
                  -->
                  <img width="32" height="32" src="./assets/img/svg/arrow_drop_down.svg" alt="&#x2193">
                </span>
              </div>
            </div>
          </div>
        </header>
        <div class="body">
          <div class="reports-title">
            <div class="reports-title__my-reports">
              <div class="reports-title__my-reports__text">
                <h1>Мои отчеты</h1>
              </div>
              <div class="reports-title__my-reports__btn">
                <button class="add-report-btn">
                  <img src="./assets/img/svg/add_ring_light.svg" alt="add_ring_light">
                  Добавить отчет
                </button>
              </div>
            </div>
            <div class="sort">
              <span class="sort__toggle">
                Сортировать по: Году<img src="./assets/img/svg/sort.svg">
              </span>
              <div class="sort__block none">
                <div class="sort__block__element"><img src="./assets/img/svg/folder_alt.svg">По годам</div>
                <div class="sort__block__element"><img src="./assets/img/svg/save.svg">По месяцам</div>
                <div class="sort__block__element"><img src="./assets/img/svg/save.svg">По важности</div>
                <div class="sort__block__element"><img src="./assets/img/svg/save.svg">По просмотрам</div>
              </div>
            </div>
          </div>
          <div class="reports">
            <div class="reports-list">
                <div style="margin-bottom: 20px;" class="reports-list__title">
                  <div class="reports-list__title__element">
                    <input type="checkbox" class="reports-list__title__checkbox">
                    <img class="report-table-header-img" src="./assets/img/svg/setting.svg" alt="setting">
                    Название
                  </div>
                  <div class="reports-list__title__element">
                    Эффективность
                  </div>
                  <div class="reports-list__title__element">
                    Крайний срок
                  </div>
                  <div class="reports-list__title__element">
                    Помощник
                  </div>
                  <div class="reports-list__title__element">
                    Ответственный
                  </div>
            </div>
              <div class="reports-list__body">
              </div>
            </div>
          </div>
          <div class="reports-footer none">
              <div class="reports-footer__action">
                Выгрузить
                <div class="reports-footer__action__sort none">
                  <div class="variables" value="excel">
                    <img width="30" height="30" src="./assets/img/svg/xlsx.svg">
                    Выгрузить в Excel
                  </div>
                  <div class="variables" value="word">
                    <img width="30" height="30" src="./assets/img/svg/word.svg">
                    Выгрузить в Word
                  </div>
                  <div class="variables" value="pdf">
                    <img width="30" height="30" src="./assets/img/svg/pdf.svg">
                    Выгрузить в PDF
                  </div>
                </div>
                <img width="24" height="24" src="./assets/img/svg/arrow_drop_down_black.svg" alt="&#x2193">
              </div>
              <div class="reports-footer__submit__button">
                <button>Применить</button>
              </div>
            <div class="reports-footer__count"></div>
          </div>
        </div>
      </div>

</body>
</html>