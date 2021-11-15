<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.editorx.com/favicon.ico" type="image/gif" sizes="16x16">
    <title>Document</title>
</head>
<body style="font-family: 'Josefin Sans', sans-serif !important;">
<div class="main">
    <div class="header__container">
        <header class="header">
            <div class="header__logo">
              <a href="index.php" class="header__logo-link">
                <img src="./upload/logo.png" alt="" class="header__logo-img">
              </a>
            </div>
            <div class="header__active">
              <div class="header__btn">
                <input type="text" name="" id="" placeholder="Search....">
              </div>
              <ul class="header__menu">
                <li class="header__menu-item">
                  <i class="header__menu-icon fas fa-bell"></i>
                </li>
                <li class="header__menu-item">
                  <i class="ti-user header__menu-icon"></i>
                  <div class="header__menu-user-drop">
                    <ul class="header__user-sub-menu">
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                              <span class="header__user-sub-title">SIGNED IN AS</span>
                              <p class="header__user-sub-name">admin</p>
                          </a>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                            <svg class="header__user-sub-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="24px" width="24px" preserveAspectRatio="xMidYMid meet" focusable="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path> </svg>
                            <span class="header__user-sub-text">Profile</span>
                          </a>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                          <svg   height="24px" width="24px" class="header__user-sub-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="feather feather-help-circle">
                              <circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line>
                          </svg>
                            <span class="header__user-sub-text">Profile</span>
                          </a>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                          <svg  height="24px" width="24px" class="header__user-sub-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="feather feather-settings">
                              <circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                          </svg>
                              <span class="header__user-sub-text">Settings</span>
                          </a>
                        </li>
                    </ul>
                    <div class="header__user-sub-btn">
                      <button class="btn btn-rounded btn-primary btn-logout">Sign out</button>
                    </div>
                  </div>

                </li>
                <li class="header__menu-item">
                  <i class="header__menu-icon fas fa-ellipsis-h"></i>
                </li>
              </ul>          
            </div>
        </header>
    </div>
