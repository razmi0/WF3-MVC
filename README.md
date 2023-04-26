#  Objectif

Designer plusieurs projet en MVC

# Structure of the project 

|*MODEL* | *VIEW* | *CONTROLLER* |
|---|---|---|
| get_wf3_blog.php | index.html.php | data.php |

# Flow

### General MVC

```mermaid
graph LR
A(index.php) ----> D{View}--is--> E(index.html.php)
A(index.php) ----> C{Model}-- get_wf3_blog --> K[(wf3_blog)]
A(index.php) ----> B{Controller}-- include-->H(data.php)
```

### View

```mermaid
graph LR
A[View] -- is --> B(index.html.php)
B(index.html.php) -- include --> C(head.html.php)
B(index.html.php) -- include --> D(body.html.php)
D(body.html.php) -- include --> E(header.html.php)
D(body.html.php) -- include --> F(section.html.php)
D(body.html.php) -- include --> G(footer.html.php)
```
