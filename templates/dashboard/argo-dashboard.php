<section class="section">
    <div class="container">


        <header class="mb-5 is-flex is-justify-content-space-between is-align-items-center">

            <h1 class="title is-4">Dashboard</h1>
            <nav class="breadcrumb  has-succeeds-separator" aria-label="breadcrumbs">
                <ul>
                    <li>
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="is-active">
                        <a href="#">
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <article class="summary mb-4">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <div class="title">Pending</div>
                        <div class="value" id="pendingCount">12</div>
                        <div class="description">Tasks yet to be completed</div>
                    </div>
                </div>

                <div class="column">
                    <div class="box">
                        <div class="title">Completed</div>
                        <div class="value" id="completedCount">95</div>
                        <div class="description">Successfully completed tasks</div>
                    </div>
                </div>
                <div class="column">
                    <div class="box">
                        <div class="title">Total</div>
                        <div class="value" id="userCount">28</div>
                        <div class="description">Total numbers of accomplishment</div>
                    </div>
                </div>
            </div>



        </article>

        <section class="box">
            <h2>Monthly Accomplishments per Working Day</h2>
            <canvas id="accomplishmentsChart" width="400" height="150"></canvas>
        </section>
    </div>
</section>