# 💰 Product Discount Calculator

A simple **PHP + HTML + CSS** web application that calculates the discount price of a product.  
This project demonstrates handling **form inputs with PHP**, performing **server-side calculations**, and styling with **CSS**.

---

## 🚀 Features
- Enter a product description, list price, and discount percent.
- Calculates the **discount amount** and **final price**.
- Uses PHP (`display_discount.php`) to process form data.
- Clean layout styled with `main.css`.

---

## 📂 Project Structure

project-root/
│── index.html # Main form page (user inputs product info)
│── display_discount.php # Processes input and calculates discount
│── main.css # Styling for form and results page

---

## 🖥️ How to Run Locally
1. Install [XAMPP](https://www.apachefriends.org/) or another PHP server.
2. Place the project folder inside the `htdocs/` directory.  
   Example:  
C:/xampp/htdocs/discount-calculator/

3. Start **Apache** in XAMPP.
4. Open a browser and visit: http://localhost/discount-calculator/index.html
5. Enter product details and click **Calculate Discount**.

---

## 📝 Example Usage
- **Product**: Laptop  
- **List Price**: `1200`  
- **Discount Percent**: `10`  

👉 The result page will display:

Product: Laptop
List Price: $1200.00
Discount Percent: 10%
Discount Amount: $120.00
Discount Price: $1080.00


---

## 🎓 Skills Demonstrated
- PHP form handling with `$_POST`.
- Server-side arithmetic operations.
- HTML forms and input fields.
- CSS for responsive, styled UI.

---

## 📸 Screenshots 
<img width="689" height="250" alt="image" src="https://github.com/user-attachments/assets/91996b4d-6795-4a08-96d8-090cd8ddcc38" />

<img width="689" height="250" alt="image" src="https://github.com/user-attachments/assets/b5e22190-ac74-4f7b-b165-d63799094597" />

---

## 🔮 Future Improvements
- Add input validation (e.g., restrict invalid/negative numbers).
- Display currency in multiple formats.
- Store calculation history in a MySQL database.
- Add JavaScript for instant (client-side) calculations.

---

## 📜 License
This project is licensed under the **MIT License**.


