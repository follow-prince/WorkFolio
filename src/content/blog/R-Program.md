---
title: R Programming Lab Notes
publishDate: 2024-01-2 08:10:00
img: https://contentstatic.techgig.com/thumb/msid-76887556,width-800,resizemode-4/R-programming-language-is-all-time-high-in-TIOBE-index-for-July-2020.jpg?122162
img_alt: Lab Notes  
description: The R Language MCA lab notes from Dr. MGR University are a valuable resource for students.
tags:
  - R-Program
  - Dr.MGR University
---



# EX NO:1

## Operations on matrices using R programming

### Algorithm

1. Create two matrices, `mat1` and `mat2`, using the given data.
2. Print both matrices.
3. Access and print specific elements of `mat2`.
4. Extract specific submatrices from `mat2`.
5. Extract the second row of `mat2` without dropping dimensions.
6. Exclude the first row and the second and third columns from `mat2`.
7. Use logical indexing to select specific elements from `mat2`.
8. Perform basic arithmetic operations on `mat1`.
9. Add, subtract, and multiply `mat1` and `mat2`.
10. Print the results of the operations.

### Program

```R

mat1.data <- c(1, 2, 3, 4, 5, 6, 7, 8, 9)
mat1 <- matrix(mat1.data, nrow = 3, ncol = 3, byrow = TRUE)
cat("mat1:\n", mat1, "\n\n")


mat2.data <- c(10, 11, 12, 13, 14, 15, 16, 17, 18)
mat2 <- matrix(mat2.data, nrow = 3)
cat("mat2:\n", mat2, "\n\n")

cat("mat2[1,2]:", mat2[1, 2], "\n")

cat("mat2[c(1,3),c(2,3)]:\n", mat2[c(1, 3), c(2, 3)], "\n")

cat("mat2[2,, drop=FALSE]:\n", mat2[2,, drop=FALSE], "\n")

cat("mat2[c(-1),c(-2,-3), drop=FALSE]:\n", mat2[c(-1), c(-2, -3), drop=FALSE], "\n")

cat("mat2[c(TRUE,FALSE,TRUE),c(FALSE,TRUE,TRUE)]:\n", mat2[c(TRUE, FALSE, TRUE), c(FALSE, TRUE, TRUE)], "\n")

cat("mat2[c(TRUE,FALSE),c(FALSE,TRUE,TRUE)]:\n", mat2[c(TRUE, FALSE), c(FALSE, TRUE, TRUE)], "\n")

cat("mat1*5:\n", mat1 * 5, "\n")
cat("mat1+2:\n", mat1 + 2, "\n")
cat("mat1/2:\n", mat1 / 2, "\n")

mat_add <- mat1 + mat2
cat("mat_add:\n", mat_add, "\n")

mat_sub <- mat1 - mat2
cat("mat_sub:\n", mat_sub, "\n")

mat_mul <- mat1 * mat2
cat("mat_mul:\n", mat_mul, "\n")
```

### Output

```
mat1:  
1 4 7 2 5 8 3 6 9  

mat2:  
10 11 12 13 14 15 16 17 18  

mat2[1,2]: 13  
mat2[c(1,3),c(2,3)]:  
13 15 16 18  
mat2[2,, drop=FALSE]:  
11 14 17  
mat2[c(-1),c(-2,-3), drop=FALSE]:  
11 12  
mat2[c(TRUE,FALSE,TRUE),c(FALSE,TRUE,TRUE)]:  
13 15 16 18  
mat2[c(TRUE,FALSE),c(FALSE,TRUE,TRUE)]:  
13 15 16 18  
mat1*5:  
5 20 35 10 25 40 15 30 45  
mat1+2:  
3 6 9 4 7 10 5 8 11  
mat1/2:  
0.5 2 3.5 1 2.5 4 1.5 3 4.5  
mat_add:  
11 15 19 15 19 23 19 23 27  
mat_sub:  
-9 -7 -5 -11 -9 -7 -13 -11 -9  
mat_mul:  
10 44 84 26 70 120 48 102 162  

[Execution complete with exit code 0]  
```

# EX NO:2

## Operations on vectors using R programming

### Algorithm

1. Create a vector `vec` with values 1, 2, 3, 4, 5.
2. Multiply the vector `vec` by a constant (2) and store the result in `multivec`.
3. Create another vector `vec2` with values 6, 7, 8, 9, 10.
4. Add `vec` and `vec2` and store the result in `vector_add`.
5. Multiply `vec` and `vec2` element-wise and store the result in `vector_mul`.
6. Subtract `vec` from `vec2` and store the result in `vector_sub`.
7. Perform division on vectors, divide `multivec` by `vec` and store the result in `vector_div`.
8. Create a sequence vector `vec_seq` ranging from 1 to 20 with a length of 30.
9. Create a repeated vector `vec_rep` by repeating the values 2, 3, 4 three times.
10. Calculate the sum of the elements in the repeated vector `vec_rep`.

### Program

```R
vec <- c(1, 2, 3, 4, 5)
cat("vec:", vec, "\n")

multivec <- vec * 2
cat("multivec:", multivec, "\n")

vec2 <- c(6, 7, 8, 9, 10)
cat("vec2:", vec2, "\n")

vector_add <- vec + vec2
cat("vector_add:", vector_add, "\n")

vector_mul <- vec * vec2
cat("vector_mul:", vector_mul, "\n")

vector_sub <- vec2 - vec
cat("vector_sub:", vector_sub, "\n")

vector_div <- multivec / vec
cat("vector_div:", vector_div, "\n")

vec_seq <- seq(from = 1, to = 20, length = 30)
cat("vec_seq:", vec_seq, "\n")

vec_rep <- rep(c(2, 3, 4), times = 3)
cat("vec_rep:", vec_rep, "\n")

cat("sum(vec_rep):", sum(vec_rep), "\n")
```

### Output

```
vec: 1 2 3 4 5  
multivec: 2 4 6 8 10  
vec2: 6 7 8 9 10  
vector_add: 7 9 11 13 15  
vector_mul: 6 14 24 36 50  
vector_sub: 5 5 5 5 5  
vector_div: 2 2 2 2 2  
vec_seq: 1 1.655172 2.310345 2.965517 3.62069 4.275862 4.931034 5.586207 6.241379 6.896552 7.551724 8.206897 8.862069 9.517241 10.17241 10.82759 11.48276 12.13793 12.7931 13.44828 14.10345 14.75862 15.41379 16.06897 16.72414 17.37931 18.03448 18.68966 19.34483 20  
vec_rep: 2 3 4 2 3 4 2 3 4  
sum(vec_rep): 27  

[Execution complete with exit code 0]  
```

# EX NO:3

### Algorithm

1. Create a directory named "Sample" in the E drive.
2. Type the data shown in the file `k1.csv` using a text editor.
3. Set the working directory to "D:\\sample".
4. Read the CSV file (`k1.csv`) into a data frame named `sample`.
5. Display the working directory and the first few rows of the data frame.
6. Extract the maximum salary (`sal`) from the "salary" column of the data frame.
7. Print the maximum salary.
8. Extract the "salary" and "name" columns from the data frame.
9. Display summary statistics for the "salary" column.
10. Create a bar chart using the "salary" and "name" columns.
11. Create a histogram for the "salary" column.

### k1.csv

```
name,salary
Alice,50000
Bob,60000
Charlie,75000
David,45000
Emma,80000
Frank,70000
Grace,55000
```

### Program

```R
dir.create("E:/Sample")

setwd("D:/Sample")
getwd()

sample <- read.csv("k1.csv")
data <- read.csv("k1.csv")

head(sample)

sal <- max(data$salary)
print(sal)

salaries <- data$salary
names <- data$name

summary(data$salary)

barplot(data$salary, main = "SALARY", ylab = 'salary', xlab = "name",
        col = "blue", horiz = FALSE, beside = TRUE)

hist(data$salary)
```

###

# EX NO:4

## Generate Random numbers using R Language

### Algorithm

1. Create a data frame `df` with three columns: "Serial_number", "Age", and "Name".
2. Sort the data frame in ascending order based on the "Age" column.
3. Display the sorted data frame.
4. Sort the data frame in descending order based on the "Age" column.
5. Display the sorted data frame.

### Program

```R
df <- data.frame("Serial_number" = 1:5, 
                 "Age" = c(20, 21, 17, 23, 19), 
                 "Name" = c("raja", "ramu", "ravi", "raghu", "rajesh"))

cat("Original Data Frame:\n")
print(df)

newdataAsc <- df[order(df$Age),]
cat("\nSorted Data Frame (Ascending Order):\n")
print(newdataAsc)

newdataDesc <- df[order(-df$Age),]
cat("\nSorted Data Frame (Descending Order):\n")
print(newdataDesc)
```

### Output

```
Original Data Frame:
  Serial_number Age   Name
1             1  20   raja
2             2  21   ramu
3             3  17   ravi
4             4  23  raghu
5             5  19 rajesh

Sorted Data Frame (Ascending Order):
  Serial_number Age   Name
3             3  17   ravi
5             5  19 rajesh
1             1  20   raja
2             2  21   ramu
4             4  23  raghu

Sorted Data Frame (Descending Order):
  Serial_number Age   Name
4             4  23  raghu
2             2  21   ramu
1             1  20   raja
5             5  19 rajesh
3             3  17   ravi

[Execution complete with exit code 0]
```

# EX NO:5

## Calculate mean, median, standard deviation, and Variance using R Language

### Algorithm

1. Set the working directory to "D:\\Sample".
2. Read the CSV file (`k5.csv`) into a data frame named `Sample2`.
3. Display the data frame.
4. Calculate the mean of the "x" column in the data frame.
5. Calculate the median of the "x" column.
6. Calculate the standard deviation of the "x" column.
7. Calculate the variance of the "x" column.
8. Calculate the median absolute deviation (MAD) of the "x" column.
9. Find the maximum value in the "x" column.
10. Find the minimum value in the "x" column.
11. Calculate the sum of values in the "x" column.
12. Determine the length (number of elements) of the "x" column.

### k5.csv

```
x
10
15
20
25
30

```

### Program

```R
setwd("D:/Sample")
getwd()

Sample2 <- read.csv("k5.csv")
data <- read.csv("k5.csv")

cat("Data Frame:\n")
print(data)

cat("\nMean of x:", mean(data$x), "\n")

cat("Median of x:", median(data$x), "\n")

cat("Standard Deviation of x:", sd(data$x), "\n")

cat("Variance of x:", var(data$x), "\n")

cat("Median Absolute Deviation (MAD) of x:", mad(data$x), "\n")

cat("Maximum value of x:", max(data$x), "\n")

cat("Minimum value of x:", min(data$x), "\n")

cat("Sum of x:", sum(data$x), "\n")

cat("Length of x:", length(data$x), "\n")
```

# EX NO:6

## Create a R Program to find Factorial using recursion

### Algorithm

1. Define a recursive function `rec_fac` to calculate the factorial of a given number.
2. Check if the input `x` is 0 or 1. If true, return 1.
3. If `x` is greater than 1, calculate the factorial using recursion.
4. Read the user input for the number (`var`).
5. Convert the input to an integer.
6. Print the input value.
7. Call the recursive function with the input value and store the result in `f`.
8. Create a vector `t1` to store the output message.
9. Display the message indicating the factorial of the input value.

### Program

```R
rec_fac <- function(x) {
  if (x == 0 || x == 1) {
    return(1)
  } else {
    return(x * rec_fac(x - 1))
  }
}

var <- readline(prompt = "Enter a number: ")
var <- as.integer(var)

cat("Input Value:", var, "\n")

f <- rec_fac(var)

t1 <- c("Factorial", var, "is", f)
cat(t1, "\n")
```

### Output

```
Enter a number: 
Input Value: NA 
Error in if (x == 0 || x == 1) { : missing value where TRUE/FALSE needed
Calls: rec_fac
Execution halted

[Execution complete with exit code 1]

```

# EX NO:7

## Find Linear Regression using R Language

### Algorithm

1. Create a directory named "Sample" in the D drive.
2. Type the data shown in the file `k3.csv` using a text editor.
3. Set the working directory to "D:\\Sample".
4. Read the CSV file (`k3.csv`) into a data frame named `sample1`.
5. Display the first few rows of the data frame.
6. Extract the "store_name", "car_sales", and "store_advt" columns from the data frame.
7. Create a new data frame named `data` with the extracted columns.
8. Display the new data frame.
9. Create a scatter plot with a smooth line using the "car_sales" and "store_advt" columns.
10. Fit a linear regression model (`Linear_model`) with "car_sales" as the dependent variable and "store_advt" as the independent variable.
11. Print the details of the linear regression model.
12. Display a summary of the linear regression model.

### k3.csv

```
store,sales,advt_cost
Store1,100,10
Store2,120,15
Store3,90,8
Store4,110,12
Store5,130,18
Store6,95,9

```

### Program

```R
dir.create("D:/Sample")


setwd("D:/Sample")
getwd()


sample1 <- read.csv("k3.csv")
data <- read.csv("k3.csv")

cat("First few rows of the data frame:\n")
print(head(sample1))

store_name <- data$store
car_sales <- data$sales
store_advt <- data$advt_cost

data <- data.frame(store_name, car_sales, store_advt)
cat("\nNew Data Frame:\n")
print(data)

scatter.smooth(x = data$car_sales, y = data$store_advt, xlab = "Car Sales",
               ylab = "Advertisement Cost", main = "Car Sales - Advertisement Cost")

Linear_model <- lm(car_sales ~ store_advt, data = data)
cat("\nLinear Regression Model:\n")
print(Linear_model)

cat("\nSummary of Linear Regression Model:\n")
summary(Linear_model)
```

# EX NO:8

## Plot the graph for normal distribution using R Language

### Algorithm

1. Create a sequence of numbers between -5 and 5, incrementing it by 0.2.
2. Define the mean (`mean`) as 0 and standard deviation (`sd`) as 1.
3. Use the `dnorm` function to calculate the probability density function (PDF) values for the normal distribution.
4. Plot the graph using the `plot` function with the generated sequence and corresponding PDF values.

### Program

```R
x <- seq(-5, 5, by = 0.1)

mean_value <- 0
sd_value <- 1

y <- dnorm(x, mean = mean_value, sd = sd_value)

plot(x, y, type = "l", lty = 1, col = "blue", xlab = "x", ylab = "Density",
     main = "Normal Distribution Curve")
```

### Output

# EX NO:9

## Create a Time series graph using R Language

### Algorithm

1. Define two vectors `sales_ice` and `sales_cooldrink` representing the sales data for ice cream and cool drinks.
2. Combine these vectors into a matrix named `combined.sales`.
3. Create a time series object (`sales.timeseries`) using the `ts` function with a specified start year and frequency.
4. Plot the time series graph using the `plot` function.
5. Display the time series object.

### Program

```R
sales_ice <- c(450, 613, 466, 205.7, 571.0, 622.0, 851.4, 621.4, 875.3, 979.7, 927.5, 14.45)
sales_cooldrink <- c(550, 713, 566, 687.2, 110, 120, 72.4, 814.4, 423.5, 98.7, 741.4, 345.3)

combined.sales <- matrix(c(sales_ice, sales_cooldrink), nrow = 12)

sales.timeseries <- ts(combined.sales, start = c(2021, 1), frequency = 12)

plot(sales.timeseries, main = "Ice Cream and Cool Drink Sales Time Series",
     xlab = "Time", ylab = "Sales")

cat("Time Series Object:\n")
print(sales.timeseries)
```

### Output

```
Time Series Object:
         Series 1 Series 2
Jan 2021   450.00    550.0
Feb 2021   613.00    713.0
Mar 2021   466.00    566.0
Apr 2021   205.70    687.2
May 2021   571.00    110.0
Jun 2021   622.00    120.0
Jul 2021   851.40     72.4
Aug 2021   621.40    814.4
Sep 2021   875.30    423.5
Oct 2021   979.70     98.7
Nov 2021   927.50    741.4
Dec 2021    14.45    345.3

[Execution complete with exit code 0]
```

# EX NO:10

## Hypothesis testing using R Language

### Algorithm

1. Generate two random samples `x` and `y` of size 20 from the integers 1 to 100 with replacement.
2. Display the values of variable `x`.
3. Display the values of variable `y`.
4. Perform a t-test between the two samples.
5. Display the correlation between variables `x` and `y`.
6. Display the covariance between variables `x` and `y`.

### Program

```R
x <- sample(c(1:100), size = 20, replace = TRUE)
y <- sample(c(1:100), size = 20, replace = TRUE)

t1 <- c("Values of Variable x:")
cat(t1, "\n")
print(x)

t2 <- c("Values of Variable y:")
cat(t2, "\n")
print(y)

t3 <- c("T-Test:")
cat(t3, "\n")
t_test_result <- t.test(x, y)
print(t_test_result)

t4 <- c("Correlation between x and y:")
cat(t4, "\n")
correlation_result <- cor(x, y)
print(correlation_result)

t5 <- c("Covariance:")
cat(t5, "\n")
covariance_result <- cov(x, y)
print(covariance_result)
```

### Output

```
Values of Variable x: 
 [1] 19 74 81 60 77 53 50 63 33 44 63 35 67 26 11 88 53 19 19 54
Values of Variable y: 
 [1] 57 72 30 94 66 37  7 25 13 53 81 44 14 48 14 77 33 32  6 93
T-Test: 

 Welch Two Sample t-test

data:  x and y
t = 0.56965, df = 36.387, p-value = 0.5724
alternative hypothesis: true difference in means is not equal to 0
95 percent confidence interval:
 -11.89889  21.19889
sample estimates:
mean of x mean of y 
    49.45     44.80 

Correlation between x and y: 
[1] 0.4165033
Covariance: 
[1] 271.3053

[Execution complete with exit code 0]


```
