<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة كتاب جديد</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-link {
            display: inline-block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>إضافة كتاب جديد</h1>
        
        <form action="/4-%20Backend-Phase/D-4/HW/library/public/addBook" method="POST">
            <div class="form-group">
                <label for="title">عنوان الكتاب:</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group">
                <label for="author">المؤلف:</label>
                <input type="text" id="author" name="author" required>
            </div>
            
            <div class="form-group">
                <label for="isbn">رقم ISBN:</label>
                <input type="text" id="isbn" name="isbn" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">الكمية المتاحة:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1" required>
            </div>
            
            <button type="submit">حفظ</button>
            <a href="/4-%20Backend-Phase/D-4/HW/library/public/Books" class="back-link">العودة إلى القائمة</a>
        </form>
    </div>
</body>
</html>