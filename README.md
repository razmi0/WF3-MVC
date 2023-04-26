#  Objectif

Designer plusieurs projet en MVC

# Structure of the project 

|*MODEL* | *VIEW* | *CONTROLLER* |
|---|---|---|
| get_wf3_blog.php | index.html.php | data.php |

# Flow

### General 

```mermaid
graph LR
A[index.php] -- include --> B[Controller]
B[Controller] -- include --> E(data.php)
A[index.php] -- include --> D[View]
D[View] -- include --> E(index.html.php)
A[index.php] -- include --> C[Model]
C[Model] -- include --> E(get_wf3_blog.php)
C[Model] -- request --> K[(wf3_blog)]
K[(wf3_blog)] -- response --> C[Model]
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
