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


##### Exercise – 1: Write a program to implement multilevel inheritance. Accept and display data for one student.

##### Multilevel Inheritance in C# - A Student Result Program

Multilevel inheritance is a fundamental concept in object-oriented programming, allowing classes to inherit properties and methods from multiple levels of parent classes. In this tutorial, we will implement multilevel inheritance in C# by creating a program that accepts and displays data for one student. 

##### Class Structure

We will define three classes:

###### Class: Student
- Data Members: Roll_no, name

###### Class: Test
- Data Members: marks1, marks2
- Inherits from Student

###### Class: Result
- Data Members: total
- Inherits from Test

##### Algorithm

Here's the step-by-step algorithm for our program:

1. Start.
2. Create a new project and define a class `Student` with attributes `Roll_no` and `name`.
3. Create a class `Test` by inheriting from the `Student` class and add additional attributes `marks1` and `marks2`.
4. Create a class `Result` by inheriting from the `Test` class with an additional member `total`. Add member functions to get details of the student and show details of the student.
5. Create an implementation class and create an object of `Result`.
6. Invoke the `getDetails` method to accept the values of the student.
7. Display details of the student by invoking the `showDetails` method.
8. Stop.

##### Implementation

Here's the C# program that implements the above algorithm:

```csharp
using System;

public class Student
{
    protected int Roll_no;
    protected string name;
}

public class Test : Student
{
    protected int marks1;
    protected int marks2;
}

public class Result : Test
{
    private int total;

    public void GetDetails()
    {
        Console.WriteLine("\n Enter the Student Details :");
        Console.Write("=================================");
        Console.Write("\n Enter the Student Roll number :");
        base.Roll_no = int.Parse(Console.ReadLine());
        Console.Write("\n Enter the Student Name :");
        base.name = Console.ReadLine();
        Console.Write("\n Enter Mark-1 :");
        base.marks1 = int.Parse(Console.ReadLine());
        Console.Write("\n Enter Mark-2 :");
        base.marks2 = int.Parse(Console.ReadLine());
    }

    public void ShowDetails()
    {
        Console.WriteLine("\n\n Student Details :");
        Console.Write("=================================");
        Console.WriteLine("\n Student Roll number: " + base.Roll_no);
        Console.WriteLine("\n Student Name: " + base.name);
        Console.WriteLine("\n Mark-1: " + base.marks1);
        Console.WriteLine("\n Mark-2: " + base.marks2);
        this.total = base.marks1 + base.marks2;
        Console.WriteLine("\n Total Marks obtained: " + this.total);
    }
}

class Program
{
    static void Main(string[] args)
    {
        Result studentResult = new Result();
        studentResult.GetDetails();
        studentResult.ShowDetails();
        Console.ReadLine();
    }
}
```

------------

##### Creating a Blog Format for the Given Code

##### Title: Building a Student Management System with C#.NET

##### Introduction

In today's tech-savvy world, managing student data efficiently is crucial for educational institutions. In this blog post, we'll guide you through the process of building a Windows application using C#.NET for managing student data. Our application will allow you to create new courses, add student details, and display student information based on specific criteria.

##### Exercise – 2: Understanding the Database Structure

Before we dive into the code, let's take a closer look at the database structure. Our database, named STUDENT, consists of the following two tables:

1. **tbl_Course**
   - CourseID (int)
   - CourseName (string)

2. **tbl_Student**
   - USN (string)
   - StudName (string)
   - Address (string)
   - CourseID (int)
   - YrOfAdmsn (int)

##### Building the Windows Application

We will develop a Windows application with the following functionalities:

##### a) Entering New Course Details

To create a new course, follow these steps:

1. Start the application.
2. Design a Windows form to accept course details.
3. Input course details and store them in the Course data table.

##### b) Entering New Student Details

To add new student details, proceed as follows:

1. Start the application.
2. Design a Windows form to accept student details.
3. Input student details and store them in the Student data table.

##### c) Displaying Student Details for a Particular Course

You can display student details for a specific course:

1. Design a Windows form to display student details using a Grid control.
2. Accept the Course ID and filter the student details based on the selected course.

##### d) Displaying Student Details for a Particular Year

To view student details for a particular year, follow these steps:

1. Design a Windows form to display student details using a Grid control.
2. Input the desired year and filter student details based on the selected year.

##### Code Implementation

**CommonData.cs:**
```csharp
using System;
using System.Collections.Generic;
using System.Data;

namespace Student
{
    class CommonData
    {
        public static DataTable Stud = new DataTable();
        public static DataTable Course = new DataTable();

        static CommonData()
        {
            Stud.Columns.Add("USN");
            Stud.Columns.Add("StudName");
            Stud.Columns.Add("Address");
            Stud.Columns.Add("CourseID");
            Stud.Columns.Add("YrOfAdmsn");

            Course.Columns.Add("CourseID");
            Course.Columns.Add("CourseName");
        }
    }
}
```

**Course.cs:**
```csharp
using System;
using System.Data;
using System.Windows.Forms;

namespace Student
{
    public partial class Course : Form
    {
        public Course()
        {
            InitializeComponent();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnClear_Click(object sender, EventArgs e)
        {
            txtCid.Text = "";
            txtCName.Text = "";
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            DataRow dr = CommonData.Course.NewRow();
            dr[0] = txtCid.Text;
            dr[1] = txtCName.Text;
            CommonData.Course.Rows.Add(dr);
            MessageBox.Show("Row Inserted");
        }

        private void Course_Load(object sender, EventArgs e)
        {
            // You don't need to recreate the DataTable; it's already done in CommonData.
        }
    }
}
```

**Student.cs:**
```csharp
using System;
using System.Data;
using System.Windows.Forms;

namespace Student
{
    public partial class Student : Form
    {
        public Student()
        {
            InitializeComponent();
        }

        private void btnClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {
            DataRow dr = CommonData.Stud.NewRow();
            dr[0] = txtUID.Text;
            dr[1] = txtName.Text;
            dr[2] = txtAddress.Text;
            dr[3] = int.Parse(txtCid.Text);
            dr[4] = int.Parse(txtYear.Text);
            CommonData.Stud.Rows.Add(dr);
            MessageBox.Show("A new record Inserted");
        }

        private void Student_Load(object sender, EventArgs e)
        {
            int cnt = CommonData.Course.Rows.Count;
            for (int r = 0; r < cnt; r++)
            {
                DataRow dr = CommonData.Course.Rows[r];
                txtCid.Items.Add(dr[0]);
            }
        }

        private void btnClear_Click_1(object sender, EventArgs e)
        {
            txtUID.Text = "";
            txtName.Text = "";
            txtCid.Text = "";
            txtAddress.Text = "";
            txtYear.Text = "";
        }
    }
}
```

**studentDetails.cs:**
```csharp
using System;
using System.Data;
using System.Windows.Forms;

namespace Student
{
    public partial class studentDetails : Form
    {
        public studentDetails()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            DataRow[] dr = CommonData.Stud.Select("CourseID=" + "'" + cmbCourse.Text + "'");
            gridData.DataSource = dr.CopyToDataTable();
            gridData.Refresh();
        }

        private void btnClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void studentDetails_Load(object sender, EventArgs e)
        {
            int cnt = CommonData.Course.Rows.Count;
            for (int r = 0; r < cnt; r++)
            {
                DataRow dr = CommonData.Course.Rows[r];
                cmbCourse.Items.Add(dr[0]);
            }
        }
    }
}
```

**studentsYearWise.cs:**
```csharp
using System;
using System.Data;
using System.Windows.Forms;

namespace Student
{
    public partial class studentsYearWise : Form
    {
        public studentsYearWise()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            DataRow[] dr = CommonData.Stud.Select("YrOfAdmsn=" + "'" + cmbYear.Text + "'");
            gridData.DataSource = dr.CopyToDataTable();
            gridData.Refresh();
        }

        private void studentsYearWise_Load(object sender, EventArgs e)
        {
            int cnt = CommonData.Stud.Rows.Count;
            for (int r = 0; r < cnt; r++)
            {
                DataRow dr = CommonData.Stud.Rows[r];
                cmbYear.Items.Add(dr[4]);
            }
        }
    }
}
```

##### Conclusion

In this blog post, we've explored the development of a Windows application for managing student data using C#.NET. By following the outlined steps and code snippets, you can create a powerful tool for educational institutions to efficiently manage student records, courses, and more. This application can be further extended and enhanced to meet specific institutional needs. Happy coding!


------------

##### Exercise – 3: Create the application using ASP.NET Server controls that accepts name, password, age, email id, and user id.

##### ASP.NET Server Controls for User Registration

In this exercise, we will create an ASP.NET application that accepts user registration information, including name, password, age, email ID, and user ID. We will implement server-side and client-side validation to ensure data integrity.

##### Aim
To create an ASP.NET application with ASP.NET server controls and implement client-side validation using ASP.NET Validation controls.

##### Algorithm
1. **Start**: Begin the program.
2. **Create ASP.NET Website**: Create an ASP.NET website using C# as the language.
3. **Design Web Form**: Design a web form with ASP.NET server controls to accept user information.
4. **Add Validation Controls**: Insert required validation controls for all input fields and associate them with their corresponding input controls.
5. **Custom Validation**: Add a custom validation control for the User ID field. Ensure it has at least one capital letter and one digit, with a length between 7 and 20 characters.
6. **Password Confirmation**: Insert a compare validation control to confirm the password.
7. **Age Validation**: Insert a range validation control to validate the age within the range of 21 to 30.
8. **Email Validation**: Insert a regular expression validation control to validate the email ID format.
9. **Display Validated Data**: After all values have been accepted and validated, display the user's information.
10. **Stop**: End the program.

##### Program

**Default.aspx:**

```html
<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>
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
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblUserID" runat="server" Text="Enter User ID"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtUID" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server"
                            ControlToValidate="txtUID" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                        <asp:CustomValidator ID="CustomValidator1" runat="server" ControlToValidate="txtUID"
                            ErrorMessage="Enter a valid User ID" style="font-size: x-small"
                            OnServerValidate="CustomValidator1_ServerValidate"></asp:CustomValidator>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblPassword" runat="server" Text="Enter Password"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtPWD" runat="server" TextMode="Password"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server"
                            ControlToValidate="txtPWD" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblRpassword" runat="server" Text="Re-Type Password"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtRpwd" runat="server" TextMode="Password"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server"
                            ControlToValidate="txtRpwd" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                        <asp:CompareValidator ID="CompareValidator1" runat="server"
                            ControlToCompare="txtPWD" ControlToValidate="txtRpwd"
                            ErrorMessage="Passwords must match" style="font-size: x-small"></asp:CompareValidator>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblUname" runat="server" Text="User Name"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtUname" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server"
                            ControlToValidate="txtUname" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblAge" runat="server" Text="Age"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtAge" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server"
                            ControlToValidate="txtAge" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                        <asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="txtAge"
                            ErrorMessage="Age should be between 21 and 30" MinimumValue="21" MaximumValue="30"
                            Type="Integer" style="font-size: x-small"></asp:RangeValidator>
                    </td>
                </tr>
                <tr>
                    <td class="style6">
                        <asp:Label ID="lblemailID" runat="server" Text="Email ID"></asp:Label>
                    </td>
                    <td class="style5">
                        <asp:TextBox ID="txtEmailID" runat="server"></asp:TextBox>
                        <br />
                        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server"
                            ControlToValidate="txtEmailID" ErrorMessage="Value Required"
                            style="font-size: x-small" InitialValue=""></asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server"
                            ControlToValidate="txtEmailID" ErrorMessage="Enter a valid email format"
                            style="font-size: x-small"
                            ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <asp:Button ID="btnSubmit" runat="server" Text="Submit" OnClick="btnSubmit_Click" />
                    </td>
                    <td style="text-align: center">
                        <asp:Button ID="btnClose" runat="server" Text="Close" OnClick="btnClose_Click" />
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
```

**Default.aspx.cs:**

```csharp
using System;

public partial class _Default : System.Web.UI.Page
{
    protected void CustomValidator1_ServerValidate(object source, ServerValidateEventArgs args)
    {
        string tData = args.Value.ToString().Trim();
        args.IsValid = false;
        if (tData.Length < 7 || tData.Length > 20) return;

        int charCnt = 0;
        int numCnt = 0

;

        foreach (char x in tData)
        {
            if (char.IsUpper(x))
                charCnt++;
            if (char.IsDigit(x))
                numCnt++;
        }
        if (charCnt >= 1 && numCnt >= 1)
            args.IsValid = true;
    }

    protected void btnSubmit_Click(object sender, EventArgs e)
    {
        if (Page.IsValid)
        {
            // All validations passed, process the form data here
            // You can access the form inputs like txtUID.Text, txtPWD.Text, etc.
        }
    }

    protected void btnClose_Click(object sender, EventArgs e)
    {
        // Handle close button click if needed
    }
}
```


------------


```
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
            double area = length * width;
            Console.WriteLine("Area of Rectangle is :{0:0.00} ", area);
        }
    }

    class Circle : Shape
    {
        public Circle(double radius) : base(radius)
        {
        }

        public override void Area()
        {
            double area = Math.PI * Math.Pow(radius, 2);
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



