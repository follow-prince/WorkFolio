---
title: Angular Data Binding
publishDate: 2023-03-25 06:48:00
img: https://www.java4coding.com/contents/angular/images/angular-databinding-0.png
img_alt: Angular Data Binding
description: Data binding is a core concept in Angular and allows to define communication between a component and the DOM, making it very easy to define interactive applications without worrying about pushing and pulling data.
tags:
  -  Angular Data Binding
  - Interview
---
#### Angular Data Binding

Data binding is a core concept in Angular and allows to define communication between a component and the DOM, making it very easy to define interactive applications without worrying about pushing and pulling data.

**From the Component to the DOM**  
**1. Interpolation** `{{ value }}`: Adds the value of a property from the component

```html
<li>Name: {{ user.name }}</li>
<li>Address: {{ user.address }}</li>
```

**2. Property binding** `[property] = "value"`: The value is passed from the component to the specified property or simple HTML attribute

```html
<input type="email" [value]="user.email">
```

**From the DOM to the Component**

**3. Event binding** `(event) = "function"`: When a specific DOM event happens (eg.: click, change, keyup), call the specified method in the component

```html
<button (click)="logout()"></button>
```

**4. Two-way data binding** `[(ngModel)] = "value"`: Two-way data binding allows to have the data flow both ways. For example, in the below code snippet, both the email DOM input and component email property are in sync

```html
<input type="email" [(ngModel)]="user.email">
```
