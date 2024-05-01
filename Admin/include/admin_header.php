<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../dashboard.css">
    <link href="dashboard.css">
    <link href="style.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');

    *,
    ::after,
    ::before {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    a {
        text-decoration: none;
        color: #6366f1;
    }

    li {
        list-style: none;
    }

    h2 {
        color: #3e4455;
    }

    img {
        vertical-align: middle;
        max-width: 100%;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .container {
        display: flex;
    }

    /* Sidebar layout & functionality */

    #sidebar {
        display: flex;
        flex-direction: column;
        background-color: #293b5f;
    }

    #toggler {
        display: none;
    }

    .toggle-btn {
        font-size: 1.5rem;
        cursor: pointer;
        color: #FFF;
        padding: 1rem 1.5rem;
        width: max-content;
    }

    .sidebar-nav {
        width: 85px;
        min-width: 85px;
        padding: 25px 0;
        flex: 1 1 auto;
        transition: all .25s ease-in-out;
    }

    #sidebar input[type="checkbox"]:checked~.sidebar-nav {
        width: 260px;
        min-width: 260px;
    }

    a.sidebar-link {
        padding: .625rem 1.625rem;
        color: #FFF;
        display: block;
        white-space: nowrap;
        border-left: 3px solid transparent;
    }

    .sidebar-link i {
        font-size: 1.1re;
        margin-right: .75rem;
    }

    a.sidebar-link:hover {
        background-color: rgba(255, 255, 255, .075);
        border-left: 3px solid #3b7ddd;
    }

    #sidebar input[type="checkbox"]:not(:checked)~* .sidebar-link span {
        display: none;
    }

    .main {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
    }

    /* Dashboard Navbar */

    .dashboard-navbar {
        display: flex;
        flex-wrap: nowrap;
        padding: 1rem 1.5rem;
        background-color: #f5f5f5;
    }

    .dashboard-navbar form {
        display: none;
    }

    .dashboard-navbar .navbar-content {
        display: flex;
        flex-grow: 1;
        min-width: 200px;
    }

    .dashboard-navbar .main-nav {
        margin-left: auto;
    }

    .user-link {
        position: relative;
    }

    .avatar {
        height: 40px;
        width: 40px;
    }

    .user-link-dropdown {
        display: none;
    }

    .user-link:hover .user-link-dropdown {
        position: absolute;
        right: 0;
        left: auto;
        min-width: 10rem;
        background-color: #FFF;
        display: block;
        border: 1px solid #d2d2d2;
        box-shadow: 0 .1rem .2rem rgba(255, 255, 255, .075);
        animation: fade .5s;
    }

    @keyframes fade {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .user-link-dropdown a {
        display: block;
        width: 100%;
        color: #495057;
        padding: 0 0.75rem;
        font-size: 1rem;
        margin-top: 0.75rem;
    }

    /* Dashboard Content */

    .content {
        padding: 2rem;
        flex: 1 1 auto;
    }

    .dashboard-card {
        grid-template-columns: repeat(1, 1fr);
        margin: 1rem 0;
        display: grid;
        gap: 2rem;
    }

    .card {
        background-color: #f5f5f5;
        padding: 1.5rem 1rem;
        color: #000;
        border-radius: 5px;
        transition: .4s;
        cursor: pointer;
    }

    .title {
        font-size: 1.25rem;
        font-weight: 600;
    }

    .amount {
        font-weight: 400;
        font-size: 1rem;
    }

    .card:hover {
        background-color: #293b5f;
        color: #FFF;
        transform: translateY(-10.5px);
    }

    .text-success-bg {
        background-color: #71c664;
        padding: 0.25rem 0.35rem;
        margin-right: 0.375rem;
        font-size: 0.715rem;
        color: #FFF;
        border-radius: 5px;
    }

    .badge-text {
        font-size: 0.85rem;
        font-weight: 400;
    }

    /*------------ Table Layout ------------*/

    #posts {
        border-collapse: collapse;
        margin: 30px auto;
        width: 100%;
    }

    #posts thead tr {
        color: #FFF;
        text-align: left;
        background-color: #293b5f;
    }

    #posts th,
    #posts td {
        padding: 12px 15px;
    }

    #posts tbody tr:nth-of-type(2n) {
        background-color: #f5f5f5;
    }

    /* Footer */

    .footer-wrap {
        display: flex;
        flex-wrap: wrap;
        white-space: nowrap;
        align-items: center;
        overflow-x: auto;
        justify-content: space-between;
        background-color: #f5f5f5;
        padding: 1rem 2rem;
    }

    .social-icons {
        display: none;
    }

    /* Responsive */

    @media (min-width: 768px) {

        /* Navbar Form */

        .dashboard-navbar form {
            display: block;
            max-width: 320px;
        }

        .nav-search {
            display: flex;
            flex-wrap: wrap;
        }

        .nav-search .search-query {
            flex: 1 1 auto;
            width: 1%;
            height: calc(1.5em + .9rem + 2px);
            padding: 0 20px;
            border: none;
            color: #3e4455;
            font-family: 'Poppins', sans-serif;
        }

        .nav-search .search-query:focus-visible {
            outline: none;
        }

        .nav-search .btn {
            border: 0;
            background-color: #727cf5;
            color: #FFF;
            padding: 0.45rem 0.9rem;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
        }

        /* Dashboard Content  */

        .dashboard-card {
            grid-template-columns: repeat(3, 1fr);
        }

        /* Social Icons */

        .social-icons {
            display: block;
        }

        .social-icons li:not(:last-child) {
            margin-right: 0.5rem;
            border-right: 1px solid #000;
            padding-right: 0.7rem;
        }

        .social-icons li {
            display: inline-block;
        }

        .social-icons li a {
            color: #000;
        }

        .hidden-div {
            display: none;
        }
    }
    /* ///////////////////////////////////// */
    html,
body {
    height: 100%;

    margin: 0;
    padding: 0;

}

* {
    box-sizing: border-box;
}





.input {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 15px 0;
}

.input input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.button button {
    width: 100%;
    padding: 10px;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button button:hover {
    background-color: #0056b3;
}

p {
    font-weight: bold;
    text-align: center;
    margin: 25px 0;
    color: #333;
}

.b {
    /* The image used */
    background-image: url("2.jpg");
    background-color: green;
    /* Add the blur effect */
    -webkit-filter: blur(8px);
    filter: blur(8px);

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

