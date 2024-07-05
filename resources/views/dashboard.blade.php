<!DOCTYPE html>
<html lang="en">
<head>
<!-- http://192.168.1.73:5000/ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XTREEM DEMO</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="header">
        <div class="hfirst">
            <h1>XTREEM DEMO</h1>
        </div>

        <div class="hlast">
            <span class="money">{{ $data['balance'] }}</span>
            <a href="{{route('logout')}}" class="logout">
            <span class="material-symbols-outlined">move_item</span>  
            log-out
            </a>
        </div>
    </div>
    <div id="leftmenu" class="leftmenu">
        <div id="arrow" class="arrow">
        <span id="arrow-left" class="material-symbols-outlined">
            keyboard_arrow_left
            </span>
            <span id="arrow-right" class="material-symbols-outlined">
            keyboard_arrow_right
            </span>
        </div>
        <ul class="section">
            <li data-section="home">Home</li>
            <li data-section="gamelist">Game List</li>
            <li data-section="bettinglist">Betting List</li>
            <li data-section="chargeexchange">Charge Exchange</li>
            <li data-section="exchangerequest">Exchange Request</li>
        </ul>
    </div>
    <div class="container">
        <div class="home">
        <div class="containerWrap">
            <div id class="inner">
                <h2>
                <span class="material-symbols-outlined" style="font-size: 40px;">
                    subtitles
                    </span>
                    Xtreem Demo
                </h2>
                <ul class="main">
                    <li>
                    Using XTREEM Default API
                    </li>
                    <li>
                    Using the XTREEM Extension API
                    </li>
                    <li>
                    Integrated wallet (seamless) approach
                    </li>
                    <li>
                    Provides a list of games
                    </li>
                    <li>
                    Provides betting history
                    </li>
                    <li>
                    Provides site money charging capabilities
                    </li>
                    <li>
                    Provides site money exchange capabilities
                    </li>
                    <li>
                    Provides site money charging / exchange history 
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <div class="gamelist hidden">
            <div class="containerWrap">
            <div class="inner">
                <h2>
                <span class="material-symbols-outlined" style="font-size: 40px;">
                    subtitles
                    </span>
                    Game List
                </h2>
                <div class="gameWrap">
                    <dl class="gamelist">
            @foreach ($ideas as $vendor => $games)
                <dt class="drop">
                    <a>{{ $vendor }}</a>
                </dt>
                <dd class="down">
                    <ul class="gameunit">
                        @foreach ($games as $game)
                            <li>
                                <a>
                                    <div class="imgwrap">
                                        <img src="{{ $game['image'] }}" alt="{{ $game['name'] }}">
                                    </div>
                                    <div class="title">{{ $game['name'] }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </dd>
            @endforeach
        </dl>
                </div>
                </div>
            </div>
        </div>
        <div class="bettinglist hidden">
            <div class="containerWrap">
            <div class="inner">
                <h2>
                <span class="material-symbols-outlined" style="font-size: 40px;">
                    subtitles
                    </span>
                    Betting List
                </h2>
                <div class="count">Total 6522</div>
                <div class="tableWrap">
                    <table class="table">
                        <colgroup>
                        <col width="6%">
                        <col>
                        <col width="10%">
                        <col width="10%">
                        <col width="15%">
                        <col width="15%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Game</th>
                            <th>Betting Amount</th>
                            <th>Result Amount</th>
                            <th>Craeted_at</th>
                            <th>Processed_At</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- @foreach ($ideas as $idea)
                        <tr>
                            <td>{{$idea['id']}}</td>
                            <td class="title">{{$idea['title']}}
                                <span class="bluebox">evolution</span>
                                <span class="bluebox">baccarat</span>
                                <span class="lightbox">17ddc5cbef2016c786a59b5c-qrlyfqlmnega3tj2</span>
                            </td>
                            <td>{{$idea['price']}}</td>
                            <td>{{$idea['discounted_price']}}</td>
                            <td>{{$idea['created_at']}}</td>
                            <td>{{$idea['updated_at']}}</td>   
                        </tr>
                        @endforeach -->
                    </tbody>
                    </table>
                    <ul class="pagination">
        

        {{-- Pagination Elements --}}
        @for ($i = 1; $i <= $ideas->lastPage(); $i++)
            <li class="page-item {{ ($ideas->currentPage() == $i) ? 'active' : '' }}">
                <a style="text-decoration: none; color: #333;" class="page-link" href="{{ $ideas->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        {{-- Previous Page Link --}}
        @if ($ideas->onFirstPage())
            <li class="page-item disabled"><span class="page-link">
            먼저의</span></li>
        @else
            <li class="page-item"><a style="text-decoration: none; color: #333;" class="page-link" href="{{ $ideas->previousPageUrl() }}">
            먼저의</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($ideas->hasMorePages())
            <li class="page-item"><a style="text-decoration: none; color: #333;" class="page-link" href="{{ $ideas->nextPageUrl() }}">다음</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">다음</span></li>
        @endif
    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="chargeexchange hidden">
            <div class="containerWrap">
            <div class="inner">
                <h2>
                <span class="material-symbols-outlined" style="font-size: 40px;">
                    subtitles
                    </span>
                    Charge Request
                </h2>
                <div class="loginWrap">
                    <div class="wrapchild">
                        <form action="post">
                            <div class="register">
                                <div>
                                    <label for="">Current Balance</label>
                                </div>
                                <div class="input">
                                    <input class="in" type="text" name="" id="">
                                    <span class="spann">KRW</span>
                                </div>
                            </div>
                            <div class="register">
                                <div>
                                    <label class="after" for="">Charge Amount</label>
                                </div>
                                <div class="input">
                                    <input class="in" type="text" name="" id="">
                                    <span class="spann">KRW</span>
                                </div>
                            </div>
                            <div>
                                <button class="btnchreq" type="submit">Charge Request</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="exchangerequest hidden">
            <div class="containerWrap">
            <div class="inner">
                <h2>
                <span class="material-symbols-outlined" style="font-size: 40px;">
                    subtitles
                    </span>
                    Exchange Request
                </h2>
                <div class="loginWrap">
                    <div class="wrapchild">
                        <form action="post">
                            <div class="register">
                                <div>
                                    <label for="">Current Balance</label>
                                </div>
                                <div class="input">
                                    <input class="in" type="text" name="" id="">
                                    <span class="spann">KRW</span>
                                </div>
                            </div>
                            <div class="register">
                                <div>
                                    <label class="after" for="">Exchange Amount</label>
                                </div>
                                <div class="input">
                                    <input class="in" type="text" name="" id="">
                                    <span class="spann">KRW</span>
                                </div>
                            </div>
                            <div>
                                <button class="btnchreq" type="submit">Exchange Request</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/dashboard.js')}}"></script>

    <script>
//        document.addEventListener('DOMContentLoaded', function() {
//             fetchGameData();
//         });

//         function fetchGameData() {
//     fetch('{{ route('dashboard') }}') // Assuming your Laravel route for games is set correctly
//         .then(response => response.json())
//         .then(data => {
//             const gameList = document.getElementById('gameList');
//             gameList.innerHTML = ''; // Clear existing content

//             Object.keys(data).forEach(vendor => {
//                 const games = data[vendor];

//                 // Create dt element for vendor
//                 const dt = document.createElement('dt');
//                 dt.className = 'drop';
//                 dt.innerHTML = `<a>${vendor}</a>`;
//                 gameList.appendChild(dt);

//                 // Create dd element for games
//                 const dd = document.createElement('dd');
//                 dd.className = 'down';
//                 const ul = document.createElement('ul');
//                 ul.className = 'gameunit';

//                 games.forEach(game => {
//                     // Create li element for each game
//                     const li = document.createElement('li');
//                     li.innerHTML = `
//                         <a>
//                             <div class="imgwrap">
//                                 <img src="${game.image}" alt="${game.name}">
//                             </div>
//                             <div class="title">${game.name}</div>
//                         </a>
//                     `;
//                     ul.appendChild(li);
//                 });

//                 dd.appendChild(ul);
//                 gameList.appendChild(dd);
//             });
//         })
//         .catch(error => {
//             console.error('Error fetching game data:', error);
//         });
// }

//     </script>
</body>
</html>