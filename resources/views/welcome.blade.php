<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WineShop Sale Management</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1e1e1e;
            color: #f1f1f1;
            line-height: 1.6;
        }

        header {
            background-color: #2a2a2a;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #444;
        }

        header h1 {
            font-size: 24px;
            color: #f05454;
        }

        nav a {
            color: #f1f1f1;
            margin-left: 20px;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f05454;
        }

        .hero {

            padding: 80px 20px;

            text-align: center;

            background:

                linear-gradient(145deg, rgba(46, 46, 46, 0.8), rgba(36, 36, 36, 0.8)),

                url('/images/wine.jpg');

            background-size: cover;

            background-position: center;

            color: white;

        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            color: #ccc;
        }

        .hero button {
            margin-top: 30px;
            padding: 12px 25px;
            font-size: 16px;
            background-color: #f05454;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .hero button:hover {
            background-color: #c33c3c;
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 60px 20px;
            background-color: #292929;
        }

        .feature {
            flex: 1;
            margin: 0 20px;
            padding: 20px;
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 8px;
            text-align: center;
        }

        .feature h3 {
            color: #f05454;
            margin-bottom: 10px;
        }

        .products {
            background-color: #202020;
            padding: 60px 20px;
        }

        .products h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .product {
            background-color: #2a2a2a;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 200px;
        }

        .product img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product h4 {
            margin-bottom: 5px;
            color: #f05454;
        }

        .product p {
            font-weight: bold;
        }

        footer {
            background-color: #2a2a2a;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            border-top: 1px solid #444;
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <header>
        <h1>WineShop Manager</h1>
        <nav>
            <a href="{{ route('brands') }}">Brands</a>
            <a href="{{ route('price') }}">Price</a>
            <a href="{{ route('sales.summary') }}">Sample Report</a>
            <a href="{{ route('sales.form') }}">Sales Form</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Effortless Wine Sales Tracking</h2>
        <p>Organize your inventory, monitor sales, and boost performance with ease.</p>
        <button onclick="trackSale()">Add Sale</button>
    </section>

    <section class="features">
        <div class="feature">
            <h3>Inventory Control</h3>
            <p>Real-time stock updates and alerts.</p>
        </div>
        <div class="feature">
            <h3>Fast Sales Entry</h3>
            <p>Log and analyze transactions instantly.</p>
        </div>
        <div class="feature">
            <h3>Analytics Dashboard</h3>
            <p>Make data-driven decisions quickly.</p>
        </div>
    </section>

    <section class="products">
        <h2>Popular Wines</h2>
        <div class="product-grid">
            <div class="product">
                <img src="https://via.placeholder.com/200x250?text=Red+Wine" alt="Red Wine">
                <h4>Vintage Red</h4>
                <p>$18.99</p>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/200x250?text=White+Wine" alt="White Wine">
                <h4>Crisp White</h4>
                <p>$16.50</p>
            </div>
        </div>
    </section>

    <footer>
        Contact us at sales@wineshop.com | +123 456 789
    </footer>

    <script>
        let salesCount = 0;

        function trackSale() {
            salesCount++;
            alert(`Sale recorded! Total sales: ${salesCount}`);
        }
    </script>
</body>

</html>
