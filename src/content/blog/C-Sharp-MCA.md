---
title: C# - MCA - Lab Notes from Dr.MGR University
publishDate: 2023-09-15 08:10:00
img: https://www.drmgrdu.ac.in/uploads/IT/Infrastructure/DataScience1.jpg
img_alt: Lab Notes  
description: The C# MCA lab notes from Dr. MGR University are a valuable resource for students.
tags:
  - C#
  - Programming
  - Dr.MGR University
---


### 1. Program

**Aim:**
To implement multilevel inheritance and create a program to accept and display data for one student.

**Algorithm:**

1. Create a base class `student` with data members `Roll_no` and `name`.
2. Create a derived class `Test` that inherits from the `student` class and adds data members `marks1` and `marks2`.
3. Create another derived class `Result` that inherits from the `Test` class and adds a private data member `total`.
4. Define a method `getDetails` in the `Result` class to accept student details, including roll number, name, and marks.
5. Define a method `showDetails` in the `Result` class to display the student details and calculate the total marks.
6. In the `Main` method of the `Program` class, create an object of the `Result` class, invoke the `getDetails` method to input data, and then invoke the `showDetails` method to display the student details.

**Program:**

```csharp
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Ex1
{
    public class student
    {
        protected int Roll_no;
        protected string name;
    }

    public class Test : student
    {
        protected int marks1;
        protected int marks2;
    }

    public class Result : Test
    {
        private int total;

        public void getDetails()
        {
            Console.WriteLine("\n Enter the Student Details :");
            Console.Write("=================================");
            Console.Write("\n Enter the Student Roll number :");
            base.Roll_no = int.Parse(Console.ReadLine());
            Console.Write("\n Enter the Student Name :");
            base.name = Console.ReadLine();
            Console.Write("\n Enter the Mark-1 :");
            base.marks1 = int.Parse(Console.ReadLine());
            Console.Write("\n Enter the Mark-2 :");
            base.marks2 = int.Parse(Console.ReadLine());
        }

        public void showDetails()
        {
            Console.WriteLine("\n\n Student Details :");
            Console.Write("=================================");
            Console.WriteLine("\n Student Roll number :" + base.Roll_no);
            Console.WriteLine("\n Student Name :" + base.name);
            Console.WriteLine("\n Mark-1 :" + base.marks1);
            Console.WriteLine("\n Mark-2 :" + base.marks2);
            this.total = base.marks1 + base.marks2;
            Console.WriteLine("\n Total Marks obtained :" + this.total);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            Result s1 = new Result();
            s1.getDetails();
            s1.showDetails();
            Console.ReadLine();
        }
    }
}
```

#### 2 . Program

 **Aim:**
Demonstrate the use of `virtual` and `override` keywords in C# by creating a program that calculates the area of shapes (rectangle and circle).

**Algorithm:**

1. Create a base class `Shape` with member variables `length`, `width`, and `radius`.
2. Define a constructor in the `Shape` class to initialize `length` and `width` for rectangle, and `radius` for a circle.
3. Declare a `virtual` method `Area()` in the `Shape` class to calculate the area of a shape.
4. Create a derived class `Rectangle` from `Shape` with a constructor that initializes `length` and `width`.
5. Override the `Area()` method in the `Rectangle` class to calculate the area of a rectangle.
6. Create another derived class `Circle` from `Shape` with a constructor that initializes `radius`.
7. Override the `Area()` method in the `Circle` class to calculate the area of a circle.
8. In the `Program` class, take user input for the length, width, and radius.
9. Create an instance of the `Rectangle` class and calculate the area using the overridden method.
10. Create an instance of the `Circle` class and calculate the area using the overridden method.
11. Display the results.

**Program:**

```csharp
using System;

namespace VirtualExample
{
    class Shape
    {
        public double length = 0.0;
        public double width = 0.0;
        public double radius = 0.0;

        public Shape(double length, double width)
        {
            this.length = length;
            this.width = width;
        }

        public Shape(double radius)
        {
            this.radius = radius;
        }

        public virtual void Area()
        {
            double area = 0.0;
            area = Math.PI * Math.Pow(radius, 2);
            Console.WriteLine("Area of Shape is :{0:0.00} ", area);
        }
    }

    class Rectangle : Shape
    {
        public Rectangle(double length, double width) : base(length, width)
        {
        }

        public override void Area()
        {
            double area = 0.0;
            area = length * width;
            Console.WriteLine("Area of Rectangle is :{0:0.00} ", area);
        }
    }

    class Circle : Shape
    {
        public Circle(double radius)
            : base(radius)
        {
        }

        public override void Area()
        {
            double area = 0.0;
            area = Math.PI * Math.Pow(radius, 2);
            Console.WriteLine("Area of Circle is :{0:0.00} ", area);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            double length, width, radius = 0.0;
            Console.WriteLine("Enter the Length");
            length = Double.Parse(Console.ReadLine());
            Console.WriteLine("Enter the Width");
            width = Double.Parse(Console.ReadLine());

            Rectangle objRectangle = new Rectangle(length, width);
            objRectangle.Area();

            Console.WriteLine("Enter the Radius");
            radius = Double.Parse(Console.ReadLine());

            Circle objCircle = new Circle(radius);
            objCircle.Area();

            Console.Read();
        }
    }
}
```

#### 3 . Program

**Aim:**
Design a simple calculator using a Windows application.

**Algorithm:**

1. Create a Windows Forms Application.
2. Design the form with buttons for digits, arithmetic operators, clear, and equals, as well as a text box to display the input and results.
3. Implement event handlers for button clicks and operator clicks.
4. Maintain variables to store the current result, the last operation performed, and a flag to track whether an operation is in progress.
5. Update the display based on button clicks and perform calculations when the equals button is clicked.

**Form Design:**

- Design a Windows form with buttons for digits (0-9), arithmetic operators (+, -, *, /), a decimal point (.), a clear button (C), an equals button (=), and a text box to display input and results.

**Program:**

```csharp
// Import necessary libraries
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

// Define the Calculator namespace
namespace Calculator
{
    // Define the Form1 class
    public partial class Form1 : Form
    {
        // Declare variables
        Double resultValue = 0;
        String operationPerformed = "";
        bool isOperationPerformed = false;

        // Constructor
        public Form1()
        {
            InitializeComponent();
        }

        // Event handler for digit and decimal point buttons
        private void button_click(object sender, EventArgs e)
        {
            // Clear the display if the result is zero or an operation is in progress
            if ((textBox_Result.Text == "0") || (isOperationPerformed))
                textBox_Result.Clear();

            isOperationPerformed = false;
            Button button = (Button)sender;

            // Handle the decimal point button separately to avoid duplicate points
            if (button.Text == ".")
            { 
                if (!textBox_Result.Text.Contains("."))
                    textBox_Result.Text = textBox_Result.Text + button.Text;
            }
            else
                textBox_Result.Text = textBox_Result.Text + button.Text;
        }

        // Event handler for operator buttons
        private void operator_click(object sender, EventArgs e)
        {
            Button button = (Button)sender;

            // Perform previous operation if one is in progress
            if (resultValue != 0)
            {
                button15.PerformClick();
                operationPerformed = button.Text;
                labelCurrentOperation.Text = resultValue + " " + operationPerformed;
                isOperationPerformed = true;
            }
            else
            {
                // Save the current operation and value
                operationPerformed = button.Text;
                resultValue = Double.Parse(textBox_Result.Text);
                labelCurrentOperation.Text = resultValue + " " + operationPerformed;
                isOperationPerformed = true;
            }
        }

        // Event handler for clear button
        private void button4_Click(object sender, EventArgs e)
        {
            textBox_Result.Text = "0";
        }

        // Event handler for clear all button
        private void button5_Click(object sender, EventArgs e)
        {
            textBox_Result.Text = "0";
            resultValue = 0;
        }

        // Event handler for equals button
        private void button15_Click(object sender, EventArgs e)
        {
            // Perform the calculation based on the current operation
            switch (operationPerformed)
            {
                case "+":
                    textBox_Result.Text = (resultValue + Double.Parse(textBox_Result.Text)).ToString();
                    break;
                case "-":
                    textBox_Result.Text = (resultValue - Double.Parse(textBox_Result.Text)).ToString();
                    break;
                case "*":
                    textBox_Result.Text = (resultValue * Double.Parse(textBox_Result.Text)).ToString();
                    break;
                case "/":
                    textBox_Result.Text = (resultValue / Double.Parse(textBox_Result.Text)).ToString();
                    break;
                default:
                    break;
            }

            // Update the result value and clear the current operation display
            resultValue = Double.Parse(textBox_Result.Text);
            labelCurrentOperation.Text = "";
        }
    }
}
```

## 4 . Program

### Windows Application with C#.Net

#### Aim

Develop a Windows application in C#.Net to handle Course details with options to enter new course details and display course details in a grid.

#### Algorithm

1. Create a new Windows Forms Application in C#.
2. Add a `SqlConnection` object to connect to the database.
3. Design the form with necessary controls (textboxes, buttons, datagridview).
4. Write code to handle button events for entering new course details, displaying course details, and closing the application.
5. Use SQL commands (`INSERT` and `SELECT`) to interact with the database.
6. Handle form closing event to close the database connection.
7. Clear textboxes on a button click.

#### Form Designs

- The form should contain:
  - Textboxes for entering course details (courseID and coursename).
  - Buttons for entering new course details, displaying course details, closing the application, and clearing textboxes.
  - A DataGridView to display course details.

#### Program

```csharp
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace WindowsFormsApplication4
{
    public partial class Form1 : Form   
    {
        // Database connection
        SqlConnection con = new SqlConnection("Data Source=DESKTOPFOF4B0D\\SQLEXPRESS;Initial Catalog=master;Integrated Security=True");

        public Form1()
        {
            InitializeComponent();
        }

        // Event handler for button to enter new course details
        private void button1_Click(object sender, EventArgs e)
        {
            con.Open(); 
            SqlCommand cmd = new SqlCommand("insert into TBL_COURSE values(" + textBox1.Text + ",'" + textBox2.Text + "')", con);
            cmd.ExecuteNonQuery();
            MessageBox.Show("New Course Entered");
            con.Close();
        }

        // Event handler for button to display course details in a grid
        private void button2_Click(object sender, EventArgs e)
        {
            con.Open();
            SqlDataAdapter da = new SqlDataAdapter("select * from TBL_COURSE", con);
            DataTable dt = new DataTable();
            da.Fill(dt);
            dataGridView1.DataSource = dt;
            con.Close();
        }

        // Event handler for button to close the application
        private void button3_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        // Event handler for button to clear textboxes
        private void button4_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
            textBox2.Text = "";
        }
    }
}
```

### 5 . Program

**Aim:**
Develop a Windows application in C#.Net to manage student details, allowing users to enter student information and display details of students who have taken admission in a particular year.

**Algorithm:**

1. **Form Design:**

   - Create a form with controls such as TextBoxes for student details, a ComboBox for selecting the course, and buttons for actions.
   - Another form (dis) to display details based on the admission year.

2. **Program: (Form1)**

   - Initialize SQL connection in the constructor.
   - On form load, populate a ComboBox with available course IDs from the TBL_COURSE table.
   - On button1_Click, insert new student details into the TBL_STUDENT table.
   - On button3_Click, clear all textboxes and the combobox.
   - On button4_Click, close the application.
   - On button2_Click, open the 'dis' form to display details.

3. **Program: (dis)**

   - Initialize SQL connection in the constructor.
   - On form load, populate a ComboBox with distinct admission years from the TBL_STUDENT table.
   - On button1_Click, use a SqlDataAdapter to fetch and display student details based on the selected admission year in a DataGridView.

#### code

```csharp
// Form1.cs
using System;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace WindowsFormsApplication5
{
    public partial class Form1 : Form
    {
        SqlConnection con = new SqlConnection("Data Source=DESKTOPFOF4B0D\\SQLEXPRESS;Initial Catalog=master;Integrated Security=True");

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("select COURSE_ID from TBL_COURSE", con);
            SqlDataReader dr = cmd.ExecuteReader();

            while (dr.Read())
            {
                comboBox1.Items.Add(dr[0].ToString());
            }

            con.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("insert into TBL_STUDENT values('" + textBox1.Text + "','" + textBox2.Text + "','" + textBox3.Text + "'," + comboBox1.Text + "," + textBox4.Text + ")", con);
            cmd.ExecuteNonQuery();
            MessageBox.Show("New Student Entered");
            con.Close();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
            textBox2.Text = "";
            textBox3.Text = "";
            textBox4.Text = "";
            comboBox1.Text = "";
        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            dis d = new dis();
            d.Show();
        }
    }
}
```

```csharp
// dis.cs
using System;
using System.Data;
using System.Data.SqlClient;
using System.Windows.Forms;

namespace WindowsFormsApplication5
{
    public partial class dis : Form
    {
        SqlConnection con = new SqlConnection("Data Source=DESKTOPFOF4B0D\\SQLEXPRESS;Initial Catalog=master;Integrated Security=True");

        public dis()
        {
            InitializeComponent();
        }

        private void dis_Load(object sender, EventArgs e)
        {
            con.Open();
            SqlCommand cmd = new SqlCommand("select distinct(YR_OF_AD) from TBL_STUDENT", con);
            SqlDataReader dr = cmd.ExecuteReader();

            while (dr.Read())
            {
                comboBox1.Items.Add(dr[0].ToString());
            }

            con.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            con.Open();
            SqlDataAdapter da = new SqlDataAdapter("select * from TBL_STUDENT where yr_of_ad=" + comboBox1.Text, con);
            DataTable dt = new DataTable();
            da.Fill(dt);
            dataGridView1.DataSource = dt;
            con.Close();
        }
    }
}
```

### 6 Program

## Creating an ASP.Net Application with Server Controls

#### Aim

Create a web application that accepts user information using ASP.Net server controls with the following validations:

- User ID is compulsory.
- Password is compulsory and should be reconfirmed.
- Age should be within 21 to 30.
- User Name is compulsory.
- Email ID should be valid.
- User Name should have at least one capital letter and one digit, with a length between 7 and 20 characters.

#### Algorithm

1. Create a new ASP.Net web application.
2. Design the UI using server controls in the Default.aspx file.
3. Add labels and textboxes for User ID, Password, Re-Type Password, User Name, Age, and Email ID.
4. Implement validation controls for each input:
   - User ID: RequiredFieldValidator and CustomValidator for a valid username.
   - Password: RequiredFieldValidator.
   - Re-Type Password: RequiredFieldValidator and CompareValidator to check if it matches the password.
   - User Name: RequiredFieldValidator.
   - Age: RequiredFieldValidator and RangeValidator for age between 21 and 30.
   - Email ID: RequiredFieldValidator and RegularExpressionValidator for a valid email format.
5. Add Submit and Close buttons for user interaction.
6. Implement server-side validation for User Name using the CustomValidator1_ServerValidate method in Default.aspx.cs.

### Code

#### Default.aspx

```html
<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Web Application with Validation</title>
    <style type="text/css">
        .style1 {
            font-size: xx-large;
            font-weight: bold;
            color: #FF66CC;
            text-align: center;
        }

        .style2 {
            width: 500px;
            text-align: center;
        }

        .style5 {
            font-size: x-large;
            text-align: center;
        }

        .style6 {
            font-size: x-large;
            text-align: right;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div class="style1">
            <br />
            Web Application with Validation<br />
        </div>
        <div style="text-align:center">
            <table class="style2">
                <!-- User ID -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblUserID" runat="server" Text="Enter User ID"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtUID" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtUID" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                        <asp:CustomValidator ID="CustomValidator1" runat="server" ControlToValidate="txtUID"
                            ErrorMessage="Enter the valid UserName" style="font-size: x-small" OnServerValidate="CustomValidator1_ServerValidate"
                            ClientValidationFunction="CustomValidator1_ServerValidate"></asp:CustomValidator>
                    </td>
                </tr>
                <!-- Password -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblPassword" runat="server" Text="Enter Password"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtPWD" runat="server" TextMode="Password"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtPWD" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                    </td>
                </tr>
                <!-- Re-Type Password -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblRpassword" runat="server" Text="Re-Type Password"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtRpwd" runat="server" TextMode="Password"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="txtRpwd" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                        <asp:CompareValidator ID="CompareValidator1" runat="server" ControlToCompare="txtPWD" ControlToValidate="txtRpwd" ErrorMessage="Check Password" style="font-size: x-small"></asp:CompareValidator>
                    </td>
                </tr>
                <!-- User Name -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblUname" runat="server" Text="User Name"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtUname" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="txtUname" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                    </td>
                </tr>
                <!-- Age -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblAge" runat="server" Text="Age"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtAge" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ControlToValidate="txtAge" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                         <asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="txtAge"
                            ErrorMessage="RangeValidator" MaximumValue="30" MinimumValue="21" style="font-size: x-small"></asp:RangeValidator>
                    </td>
                </tr>
                <!-- Email ID -->
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblemailID" runat="server" Text="emailID"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtEmailID" runat="server"></asp:TextBox>  <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ControlToValidate="txtPWD" ErrorMessage="Value Required" style="font-size: x-small"></asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtEmailID" ErrorMessage="Correct e-mail format" style="font-size: x-small"
                            ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                    </td>
                </tr>
                <!-- Submit and Close buttons -->
                <tr>
                    <td style="text-align: center">
                        <asp:Button ID="btnSubmit" runat="server" Text="Submit" />
                    </td>
                    <td style="text-align: center">
                        <asp:Button ID="btnClose" runat="server" Text="Close" />
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
```

#### Default.aspx.cs

``` csharp
using System;

public partial class _Default : System.Web.UI.Page
{
    protected void CustomValidator1_ServerValidate(object source, ServerValidateEventArgs args)
    {
        string tData = args.Value.ToString().Trim();
        args.IsValid = false;

        if (tData.Length < 7 || tData.Length > 20) return;

        int charCnt = 0;
        int numCnt = 0;

        foreach (char x in tData)
        {
            if (x >= 'A

' && x <= 'Z') charCnt++;
            if (x >= '0' && x <= '9') numCnt++;
        }

        if (charCnt < 1 || numCnt < 1) return;
        args.IsValid = true;
    }
}

```
