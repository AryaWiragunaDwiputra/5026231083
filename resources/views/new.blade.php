<html>
    <head>
        <title>Equipment Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="stylesheet">
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .header {
            background-color: #f2f2f2dd;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-container {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 30px;
            width: 50px;
            height: 50px;
            border: 2px solid black;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-right {
            flex: 1;
            margin-left: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-right h1 {
            font-size: 35px;
            font-weight: bold;
            margin: 0;
        }

        .search-container {
            display: flex;
            align-items: center;
            border: 1px solid black;
            border-radius: 5px;
            overflow: hidden;
            background-color: #f2f2f2dd;
        }

        .filter-btn, .search-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            background: none;
            cursor: pointer;
        }

        .filter-btn {
            border-right: 1px solid black;
            padding: 5px 10px;
        }

        .search-btn {
            border-left: 1px solid black;
            padding: 5px 10px;
        }

        .search-box {
            background-color: #f2f2f2dd;
            border: none;
            outline: none;
            font-size: 16px;
            text-align: center;
            width: 90px;
        }

        .filter, .arrow, .search {
            width: 17px;
            height: 17px;
        }

        .par {
            margin-left: 24px;
            font-size: 20px;
        }

        .equipment-container {
            text-align: center;
            margin-top: 10px;
        }

        .book-now {
            display: block;
            margin: 20px auto;
            padding: 5px 15px;
            font-size: 16px;
            font-weight: bold;
            border: 1px solid black;
            background: white;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2), 0 6px 15px 0 rgba(0,0,0,0.19);
        }

        .bottom-nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 60px;
            border-top: 1px solid #ccc;
            background: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            z-index: 1000;
        }

        .nav-item {
            flex: 1;
            color: blue;
            font-weight: bold;
            font-size: 16px;
        }

        .card {
            height: 280px;
            max-width: 180px;
            margin: 5px;
            border-radius: 15px;
            border: 1px solid #000;
            overflow: hidden;
            box-shadow: none;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        .card-img-top {
            height: 200px;
            object-fit: contain;
            padding: 65px;
            background-color: #f8f9fa;
        }


        </style>
    </head>

    <body>
        <header>
            <img class="logo-container" src="media/Logo CekDong 1.png">
        </header>
        <div class="header">
            <div class="header-right">
                <h1>Equipment</h1>
                <div class="search-container">
                    <button class="filter-btn">
                        <img class="filter" src="media/filter.png">
                        <img class="arrow" src="media/down-arrow.png">
                    </button>
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-btn">
                        <img class="search" src="media/search.png">
                    </button>
                </div>
            </div>
        </div>

        <p class="par">All list of goods, please tap the goods for start booking</p>

        <div class="equipment-container container">
            <div class="row justify-content-center">

                <div class="col-auto mb-3">
                    <div class="card">
                        <img src="media\2-removebg-preview 1.png" class="card-img-top" alt="Camera">
                        <div class="card-body">
                            <h5 class="card-title">Camera DSLR</h5>
                            <p class="card-text">20 November 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col-auto mb-3">
                    <div class="card">
                        <img src="media\9be6fca24adc2281c4bb1c6bfcb5c60d 1.png" class="card-img-top" alt="Tripod">
                        <div class="card-body">
                            <h5 class="card-title">Canon</h5>
                            <p class="card-text">20 November 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col-auto mb-3">
                    <div class="card">
                        <img src="media\image 11.png" class="card-img-top" alt="Lighting">
                        <div class="card-body">
                            <h5 class="card-title">Instax mini11</h5>
                            <p class="card-text">19 November 2024</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <button class="book-now">Book Now!</button>

        <nav class="bottom-nav">
            <div class="nav-item">Profile</div>
            <div class="nav-item">Menu</div>
            <div class="nav-item">Riwayat</div>
            <div class="nav-item">Equipment</div>
        </nav>
    </body>
</html>
