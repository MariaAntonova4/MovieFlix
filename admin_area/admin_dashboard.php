<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MovieFlix</title>

    <!-- CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/soundVibe3.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <link rel="stylesheet" href="../css/admin_sidebar.css">

    <style>

.recent-section a.btn {
    background: linear-gradient(#e50914, #c62828);
    color: white;
    width: 8em;
    /* outline: #e50914 3px 0  solid; */
    border: #e50914 3px 0 solid;
    padding: 10px 7px;
    font-size: medium;
    font-weight: 400;
}

.recent-section a.btn:hover{
    background: transparent;
    color: #e50914;
    border: 2px solid #c62828;
    
}

.recent-section a.btn:focus{
    box-shadow: 0 0 0 0.2rem rgba(255, 82, 140, 0.15);

}

.top-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .item-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .item-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        .item-list li:last-child {
            border-bottom: none;
        }

        .item-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .item-image {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>
</head>

<body class="dark-mode">
    <!-- Sidebar -->
    <div class="admin-sidebar">
        <div class="sidebar-header">
            <!-- <img src="../images/soundVibe3.png" alt="SoundVibe Logo" class="sidebar-logo"> -->
            <button class="theme-toggle sidebar-logo">
                <i class="fas fa-moon"></i>
            </button>
            <h4>MovieFlix Admin</h4>
        </div>

        <nav class="nav-menu">
            <div class="nav-item">
                <a href="admin_dashboard.php" class="nav-link active">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </div>
            <div class="nav-item">
                <a href="admin_movies.php" class="nav-link">
                    <i class="fa-solid fa-film"></i>
                    Movies
                </a>
            </div>
            <div class="nav-item">
                <a href="admin_users.html" class="nav-link">
                    <i class="fas fa-users"></i>
                    Users
                </a>
            </div>
            <div class="nav-item">
                <a href="reports.html" class="nav-link">
                    <i class="fas fa-chart-bar"></i>
                    Reports
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Send Email
                </a>
            </div>
            <!-- <div class="nav-item">
                <a href="#" class="nav-link text-danger">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </div> -->
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="admin-header">
            <h1 class="admin-title">Dashboard</h1>
            <div class="admin-actions">
                <button class="btn btn-outline-secondary">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="btn btn-outline-secondary">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stat-cards">
            <div class="stat-card">
                <!-- <div class="stat-icon" style="background: linear-gradient(45deg, #4CAF50, #8BC34A);"> -->
                <div class="stat-icon" style="background: linear-gradient(45deg, #e50914, #c62828);">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="stat-info">
                    <h3>2,150</h3>
                    <p>Total Watched</p>
                </div>
            </div>
            <div class="stat-card">
                <!-- <div class="stat-icon" style="background: linear-gradient(45deg, #2196F3, #03A9F4);"> -->
                <div class="stat-icon" style="background: linear-gradient(45deg, #e50914, #c62828);">

                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3>1,840</h3>
                    <p>Total Users</p>
                </div>
            </div>
            <div class="stat-card">
                <!-- <div class="stat-icon" style="background: linear-gradient(45deg, #9C27B0, #E91E63);"> -->
                <div class="stat-icon" style="background: linear-gradient(45deg, #e50914, #c62828);">

                    <i class="fa-solid fa-film"></i>
                </div>
                <div class="stat-info">
                    <h3>450</h3>
                    <p>Total Movies</p>
                </div>
            </div>
            <div class="stat-card">
                <!-- <div class="stat-icon" style="background: linear-gradient(45deg, #FF9800, #F44336);"> -->
                <div class="stat-icon" style="background: linear-gradient(45deg, #e50914, #c62828);">

                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-info">
                    <h3>$32,580</h3>
                    <p>Total Revenue</p>
                </div>
            </div>
        </div>
        <!-- Operation buttons -->
        <!-- <div class="recent-section">
            <div class="section-header">
                <h2 class="section-title">Operation buttons</h2>
                 <a href="#" class="view-all">View All</a> 
            </div>
            <div class="d-flex justify-content-center align-item-center">
                <div class="mx-1">
                    <a href="admin_dashboard.php?add_genres" class="btn  mx-1">Top Movies</a>
                </div>
                <div class="mx-1">
                    <a href="admin_dashboard.php?view_genres" class="btn  mx-1">Top User</a>
                </div>
                <div class="mx-1">
                    <a href="#" class="btn  mx-1"></a>
                </div>
            </div>
        </div> -->

        <!-- Recent Orders -->
        <div class="recent-section">
        <div class="top-items">
            <div class="report-section">
                <div class="section-header">
                    <h2 class="section-title">Most Watched Movie</h2>
                </div>
                <ul class="item-list">
                    <li>
                        <div class="item-info">
                            <img src="../images/minecraft.jpeg" alt="Album" class="item-image">
                            <div>
                                <div class="fw-bold">MineCraft</div>
                                <small class="text-muted">Jared Hess</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold"><i class="fa fa-star"></i> 4.5</div>
                            <small class="text-muted">$7,040</small>
                        </div>
                    </li>
                    <!-- Add more items -->
                </ul>
            </div>


            <div class="report-section">
                <div class="section-header">
                    <h2 class="section-title">Top User</h2>
                </div>
                <ul class="item-list">
                    <li>
                        <div class="item-info">
                            <img src="../images/olivia.jpeg" alt="User" class="item-image">
                            <div>
                                <div class="fw-bold">Olivia Rodrigo</div>
                                <small class="text-muted">email@example.com</small>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="fw-bold">23 Watched</div>
                            <small class="text-success">Loyal Customer</small>
                        </div>
                    </li>
                    <!-- Add more customers -->
                </ul>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>