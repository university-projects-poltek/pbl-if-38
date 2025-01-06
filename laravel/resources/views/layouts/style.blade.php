<style>
    body {
    font-family: 'kanit', sans-serif;
    margin: 0;
    height: 100vh;
}

.container {
    display: flex;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    background-color: #afb0b2;
    color: white;
    height: 100vh;
    overflow-y: auto;
    padding-bottom: 20px;
}

.sidebar a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    padding: 12px 15px;
    font-size: 18px;
}

.sidebar a:hover {
    background-color: #8a8888;
}

.sidebar a {
    border-bottom: 2px solid rgba(255, 255, 255, 255);
}

.sidebar a .iconify {
    font-size: 30px;
    margin-right: 10px;
}

.card-icon {
    color: #125491;
    font-size: 80px;
    padding: 10px;
}

.normal-icon {
    color: #125491;
    font-size: 35px;
}

.content {
    margin-left: 250px;
    padding: 20px;
    background-color: transparent;
    overflow-x: hidden;
}

.dashboard-header {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
}

.card-content {
    background-color: #D9D9D9;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.card-content:hover {
    background-color: #f0f0f0;
}

.rounded-circle {
    border: 2px solid #125491;
}

@media (max-width: 768px) {
    .sidebar {
        position: relative;
        width: 100%;
        height: auto;
    }
    .content {
        margin-left: 0;
    }
}


</style>