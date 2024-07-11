<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Fantasy</title>

    @vite(['resources/css/main.css'])
    @vite(['resources/css/page.css'])
    @vite(['resources/css/field.css'])
    @vite(['resources/css/footballers.css'])
    @vite(['resources/css/draft.css'])
</head>
<body>    
    <aside class="aside" id="aside-menu">
        <header class="aside__header">
            <a href="" class="aside__header-link">
                <div class="aside__avatar-container">
                    <img class="aside__avatar"
                        src={{asset('images/avatar.svg')}}
                        alt="avatar"
                        loading="lazy"
                    />
                </div>
                <span class="aside__username clip-text">
                    @nickname
                </span>
            </a>
        </header>
        <nav class="aside__nav">
            <ul class="aside__list">
                <li class="aside__item-wrapper">
                    <a class="aside-item" href="/main_page">
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--stroked" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 16H1.83333C1.3731 16 1 15.6181 1 15.147V8.67664C1 8.45044 1.0878 8.23344 1.24408 8.07351L7.91075 1.24983C8.23617 0.916723 8.76383 0.916723 9.08925 1.24983L15.7559 8.07351C15.9122 8.23344 16 8.45044 16 8.67664V15.147C16 15.6181 15.6269 16 15.1667 16H11M6 16H11M6 16V10.8822C6 10.4111 6.3731 10.0293 6.83333 10.0293H10.1667C10.6269 10.0293 11 10.4111 11 10.8822V16" stroke-width="2" stroke-linejoin="round"/>
                            </svg>

                        </div>

                        <span class="aside-item__name clip-text">Выйти из турнира</span>
                    </a>
                </li>
                <li class="aside__item-wrapper">
                    <div class="aside-item aside-item--text">
                        <span class="aside-item__name clip-text">Ваши футболисты</span>
                    </div>
                </li>
                <li class="aside__item-wrapper">
                    <button class="aside-item" data-action="show-block" data-target-id="field-footballer">
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Имя футболиста</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button class="aside-item" data-action="show-block" data-target-id="field-footballer">
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Имя футболиста</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                        <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button  class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button  class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button  class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
                <li class="aside__item-wrapper">
                    <button  class="aside-item" disabled>
                        <div class="aside-item__svg-wrapper">
                            <svg class="aside-item__svg--filled" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 0.000110761C7.23777 -0.00351438 6.73009 0.0904509 6.25773 0.276313C5.79881 0.452242 5.39169 0.710386 5.05226 1.04328C5.05119 1.04434 5.05059 1.04578 5.05059 1.04728C5.05059 1.0482 5.05036 1.0491 5.04993 1.04991L5.04974 1.05026C5.04942 1.05087 5.04901 1.05143 5.04853 1.05192C4.71845 1.38796 4.46287 1.79139 4.28446 2.25097C4.10193 2.70964 4.01399 3.21205 4.01399 3.75071C4.01399 4.29436 4.1006 4.80177 4.28446 5.26169C4.46416 5.71243 4.71966 6.11077 5.0483 6.44801C5.04893 6.44866 5.04947 6.44939 5.0499 6.4502C5.05035 6.45105 5.05094 6.45184 5.05163 6.45252C5.38942 6.7853 5.79351 7.04716 6.24934 7.23066C6.25038 7.23108 6.25107 7.23209 6.25107 7.23321C6.25107 7.23435 6.25177 7.23537 6.25283 7.23578C6.71335 7.41154 7.21506 7.49756 7.74334 7.49756C8.26918 7.49756 8.76843 7.41147 9.23043 7.23555C9.23114 7.23528 9.23161 7.2346 9.23161 7.23384C9.23161 7.23309 9.23207 7.23242 9.23276 7.23214C9.68929 7.04844 10.0899 6.78615 10.4201 6.45149C10.7599 6.11655 11.0197 5.71412 11.2009 5.26169C11.384 4.80365 11.472 4.29851 11.4727 3.75613C11.4727 3.75245 11.4757 3.74946 11.4793 3.74946C11.483 3.74946 11.486 3.74646 11.486 3.74278C11.4853 3.2079 11.3986 2.70899 11.2155 2.25222C11.0463 1.8052 10.781 1.39555 10.4361 1.04868C10.1031 0.711953 9.695 0.448239 9.24094 0.276313C8.76863 0.0902838 8.26224 -0.00368838 7.75 0.000110761ZM7.78198 10.0009C4.69484 10.0009 3.03735 10.2671 1.80489 11.1382C1.18933 11.5756 0.782954 12.1692 0.553784 12.8604C0.176949 13.9968 1.22224 14.9978 2.41954 14.9982L7.75 15H13.0783C14.2772 15 15.3295 13.9977 14.9502 12.8604C14.721 12.1692 14.3147 11.5768 13.6978 11.1407C12.468 10.2696 10.8678 10.0009 7.78198 10.0009Z"/>
                            </svg>
                        </div>

                        <span class="aside-item__name clip-text">Ожидается</span>
                    </button>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="content">
        <h1 class="visually-hidden">Драфт</h1>
        <header class="header">
            <div class="header__controls centring-wrapper">
                <button class="burger" data-action="show-modal" data-modal-id="aside-menu">
                    <span class="burger__decor"></span>
                </button>  
                <a class="header__logo-link" href="/main_page">
                    <img class="header__logo"
                        src={{asset('images/mini-logo.svg')}}
                        alt="football fantasy logo"
                        width="39" height="39" loading="lazy"
                    />
                </a>   
            </div>
            <h2 class="header__title clip-text">Вы набираете команду</h2>   
            <time class="header__timer">11:48</time>
        </header>
        <main class="draft">
            <section class="field centring-wrapper">
                <h2 class="visually-hidden">Ваша команда</h2>
                <div class="field__wrapper">
                    <div class="field__tactics centered" id="tactics">
                        <button class="field__tactics-button"></button>
                        <ul class="field__tactics-list select" id="tactic">
                            <li class="select__item field__option active" value="3-3-4" data-action="activate-me" data-name="tactic">3-3-4</li>
                            <li class="select__item field__option" value="4-3-3" data-action="activate-me" data-name="tactic">4-3-3</li>
                            <li class="select__item field__option" value="4-2-4" data-action="activate-me" data-name="tactic">4-2-4</li>
                        </ul>
                    </div>
                    <div class="field__body">
                        <div class="field__footballers-wrapper">
                            <ul class="field__footballers " id="attackers">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="show-block" data-target-id="field-footballer" data-name="search-footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/player.jfif')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="midfielders">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="defenders">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                            <ul class="field__footballers" id="goalkeeper">
                                <li class="field__card-wrapper">
                                    <button class="field__card" data-action="activate-me" data-name="footballer">
                                        <img class="field__footballer-photo"
                                            src={{asset('images/avatar.svg')}}
                                            alt=""
                                            width="80" height="80" loading="lazy"
                                        />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- чтобы этот блок с инфой появился нужно указать какой-нибудь кнопке -->
                <div class="draft__footballer-controls--left footballer-controls--fixed footballer-controls--left footballer-controls--mid footballer-controls" id="field-footballer">
                    <div class="footballer-controls__img-wrapper">
                        <img class="footballer-controls__img" 
                            src={{asset('images/avatar.svg')}} 
                            alt="" 
                            height="143" loading="lazy"
                        />
                    </div>
                    <div class="footballer-controls__inf-wrapper">
                        <h3 class="footballer-controls__title">Имя футболиста <br/>в две строки как-то</h3>
                        <div class="footballer-controls__price fooballer-controls__accent-text">45000&dollar;</div>
                        <div class="footballer-controls__inf"><span>Голы</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Удары</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Ключевые пасы</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Ассисты</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Поймано</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Отборы</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Желтные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
                        <div class="footballer-controls__inf"><span>Красные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
                    </div>
                    <div class="footballer-controls__buttons">
                        <button class="footballer-controls__button footballer-controls__button--grey button"
                            data-action="close-block">
                            Скрыть
                        </button>
                    </div>
                </div>
            </section>
            <h2 class="visually-hidden">Информация и поиск футболистов</h2>
            <header class="draft__inf draft__inf--top centring-wrapper">
                Оставшийся бюджет:&nbsp<span class="draft__accent-text draft__accent-text--light">45000&dollar;</span>
            </header>
            <div class="footballers">
                <div class="footballers__search-box search-box">
                    <label for="fotballers-search" class="visually-hidden">Поиск по футболистам</label>
                    <input class="footballers__search input" type="search" id="footballers-search" name="footballers-search" placeholder="Найти футболиста"/>
                    <button class="footballers__search-controls search-box__controls"></button>
                </div>
                <div class="footballers__wrapper">
                    <div class="footballers__list">
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                        <article class="footballers__card">
                            <button class="footballers__img-wrapper button" data-action="show-block activate-me" data-target-id="footballer-controls" data-name="search-footballer">
                                <img class="footballers__img"
                                    src={{asset('images/auth-background.png')}}
                                    alt=""
                                    loading="lazy"
                                />
                            </button>
                            <h3 class="footballers__name clip-text">Вася-жоский-удар 228</h3>
                        </article>
                    </div>
                    <div class="footballer-controls--right footballer-controls--fixed footballer-controls--mid footballer-controls" id="footballer-controls">
                        <div class="footballer-controls__img-wrapper">
                            <img class="footballer-controls__img" 
                                src={{asset('images/avatar.svg')}} 
                                alt="" 
                                height="143" loading="lazy"
                            />
                        </div>
                        <div class="footballer-controls__inf-wrapper">
                            <h3 class="footballer-controls__title">Имя футболиста <br/>в две строки как-то</h3>
                            <div class="footballer-controls__price fooballer-controls__accent-text">45000&dollar;</div>
                            <div class="footballer-controls__inf"><span>Голы</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Удары</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Ключевые пасы</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Ассисты</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Поймано</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Отборы</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Желтные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
                            <div class="footballer-controls__inf"><span>Красные карточки</span><span class="fooballer-controls__accent-text">10</span></div>
                        </div>
                        <div class="footballer-controls__buttons">
                            <button class="footballer-controls__button footballer-controls__button--white button">Взять</button>
                            <button class="footballer-controls__button footballer-controls__button--grey button"
                                data-action="close-block deactivate" data-name="search-footballer">
                                Скрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="draft__inf draft__inf--bottom centring-wrapper">
                Оставшееся время:&nbsp<span class="draft__accent-text draft__accent-text--red"><time class="controls__time" id="rest-time">30</time> секунд</span>
            </footer>
        </main>
    </div>

    @vite('resources/js/modal-menu.js')
    @vite('resources/js/activate-action.js')
    @vite('resources/js/tactics-dropdown.js')

</body>
</html>