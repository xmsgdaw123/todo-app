<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">Todo App</a>
        </div>
        <nav>
            <a href="/">Inicio</a>
            <a href="/">Login</a>
        </nav>
    </header>
    <main>
        <div class="section">
            <div class="section-title">Mis tareas</div>
            <div class="section-description">Gestiona tus tareas</div>
        </div>
        <div class="section">
            <div class="section-subtitle">Añadir tarea</div>
            <div class="section-description">Añade nuevas tareas</div>
        </div>
        <div class="section">
            <div class="section-subtitle">Tareas pendientes</div>
            <div class="section-description">Organiza tus tareas pendientes</div>
            <div class="tasks-container">
                <div class="task">
                    <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                      </div>
                    <div class="task-title">Acabar esta aplicación</div>
                </div>
                <div class="task">
                    <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                      </div>
                    <div class="task-title">Acabar esta aplicación</div>
                </div>
                <div class="task">
                    <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                      </div>
                    <div class="task-title">Acabar esta aplicación</div>
                </div>
            </div>
        </div>
    </main>
    <footer>&copy; 2022 - Todo App</footer>
</body>
</html>
