# 📈 Future Value Calculator (PHP Project)

A simple **PHP + HTML + CSS** application that calculates the **future value of an investment** based on user inputs.  
This project demonstrates form handling with PHP, input validation, and clean presentation of financial calculations.

---

## 🚀 Features
- Enter investment amount, yearly interest rate, and number of years.
- Calculates and displays:
  - Future Value of the investment
- Displays error messages if inputs are invalid (styled with `.error`).
- Clean form layout styled with `main.css`.

---

## 📂 Project Structure

project-root/

- index.php # Form page (user enters investment details)
- display_results.php # Processes input and displays calculation
- main.css # Styling for form, results, and error messages

---

## 🖥️ How to Run Locally
1. Install [XAMPP](https://www.apachefriends.org/) or another PHP server.
2. Place the project folder inside the `htdocs/` directory.  
   Example:  
 C:/xampp/htdocs/future-value-calculator/

4. Start **Apache** in XAMPP.
5. Open a browser and visit:

http://localhost/future-value-calculator/index.php
6. Fill out the form with investment details and click **Calculate**.

---

## 📝 Example Usage
- **Investment Amount**: `1000`  
- **Yearly Interest Rate**: `5`  
- **Number of Years**: `2`  

👉 The result page (`display_results.php`) will display:

Investment Amount: $1,000.00
Yearly Interest Rate: 5%
Number of Years: 2
Future Value: $36,000.00

---

## 🎓 Skills Demonstrated
- PHP form handling with `$_POST`.
- Arithmetic calculations for compound interest.
- Error handling and validation for user input.
- CSS for neat, centered, and user-friendly layout.

---

## 📸 Screenshots 
<img width="689" height="250" alt="image" src="https://github.com/user-attachments/assets/03f03ff4-6df9-4fe2-a834-d3d987c9a0f3" />

<img width="689" height="250" alt="image" src="https://github.com/user-attachments/assets/9809e04b-3ec2-48a9-8af2-2c9699713a46" />



---

## 🔮 Future Improvements
- Add currency selection and formatting.
- Support monthly contributions in addition to initial investment.
- Add charts to visualize growth over time (using JS libraries).
- Save calculation history in a database.

---

## 📜 License
This project is licensed under the **MIT License**.
