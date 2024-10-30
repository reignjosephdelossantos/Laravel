<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <title>Online Resume</title> -->
    <title>{{ $resume->name }}'s Online Resume</title>
    
</head>
<style>
    .paper {
    position: relative;
    border: 1px solid;
    width: min-content;
    height: min-content;
    margin: 20px;
    box-shadow: 0px 0px 5px 0px #0000005e;
    border-radius: 10px;
    display: grid;
    padding: 30px;
    grid-column-gap: 30px;
}

.col_1 {position: relative;display: flex;grid-column: 1;flex-direction: column;width: 500px;}

.header1 {font-size: xx-large;margin: 20px 0px 50px 10px;}
.header3 {font-size: x-large;margin: 20px 0px 30px 0px;}
.skills{position: relative;}
.skills p::before {
    content: "•"; 
    color: black; 
    font-size: 1.2rem;
    display: inline-block;
    margin-right: 0.5rem; 
}
p{margin: 0px 0px 10px 0px}
.bold{font-weight: bold;text-align: justify;font-size: 13px;}

.col_2 {position: relative;display: flex;grid-column: 2;flex-direction: column;width: auto;margin: 20px 0px 0px 0px;}
.col_2 contact{position: relative;}
.col_2 p::before {
    content: "•"; 
    color: black; 
    font-size: 1.2rem;
    display: inline-block;
    margin-right: 0.5rem; 
}

.margin{margin:20px 0px 20px 0px}
</style>




<body style="display: flex; justify-content: center;">
    <div class="paper">
        <div class="col_1">
            <h1 class="header1 ">{{ $resume->name }}</h1>
            <div style="width: 100%; border: 1px solid;"></div>
            <h3 class="header3">RESUME OBJECTIVE</h3>
            <p>{{ $resume->objective }}</p>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3">PROFESSIONAL SKILLS</h3>
            <div class="skills">
                <span class="bold">Design</span>
                <p >{{ json_decode($resume->skills_design)->{1} }}</p>
                <p >{{ json_decode($resume->skills_design)->{2} }}</p>
                <p >{{ json_decode($resume->skills_design)->{3} }}</p>
                <span class="bold">Problem-solving</span>
                <p >{{ json_decode($resume->skills_problem_solving)->{1} }}</p>
                <p >{{ json_decode($resume->skills_problem_solving)->{2} }}</p>
                <p >{{ json_decode($resume->skills_problem_solving)->{3} }}</p>
                <span class="bold">Project Management</span>
                <p >{{ json_decode($resume->skills_management)->{1} }}</p>
                <p >{{ json_decode($resume->skills_management)->{2} }}</p>
                <p >{{ json_decode($resume->skills_management)->{3} }}</p>
            </div>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3">CERTIFICATIONS</h3>
            <p >{{ json_decode($resume->certifications)->{1} }}</p>
            <p >{{ json_decode($resume->certifications)->{2} }}</p>
            <p >{{ json_decode($resume->certifications)->{3} }}</p>
        </div>
        <div class="col_2">
            <img style="width: 200px; border: 1px solid; align-self: center;" src="https://lh3.googleusercontent.com/fife/ALs6j_FIvxOkWtguD4UHTyXflEW_EGTXGT7axCOCXcDTi9jt_re6XjgiWnJX97Kj74koMl2zINggdJtEH6i-PtAFdDOyHJGrZ8EJXzEfi7s6lPLl0BTIeQ4fmcsrzdImAupEs1WJiH2iIYWGc_VrwcfshdqJq4ZTNVfnfT40C9MeS78Bn9QsDTdz64vINf8gFmJp072TYRDjVk9q8ZU3OjZrBhX6pTkhK89erVGq9JLepGk01a6bLvoMAv0UkU4wFusXhcwZTybmvS2RSjCoPcfe0F_NFL70UWBEZ3WLxMZcMxVCNC4tw1C48fYdj4-_jgVAvBg0_mZONlkrKQWKQFHLcjNQlW6J1K9a9nvm7Md6f2z6x09ogVNYuNwtmZcAdHE4Xr0koC4D7lIXVsLkHz1mOTXCF1nc7u2AUYpSNWNphqmHNHfWHSgwKrCWSUFAHJz9KOHyb5f9ig9S-DwQXl3cztK_stab8TpM7HlfiFFdH8OzPudpESE8i_kSh7LTOlyJDIc4YT2srdfI3JdP0f8QnhYnxhgazxjKeJRsD03pOEESAAepz8kpF0H_xWINvjwVtrNGGgGmHRBfNkB9WF6eSEFxrb7VhqgSdvmFN21Za3WpU_cM8kdyb3a_3zd72feDo5HMkaW-ZcfOAetKi5LkfFXZSjFErl2OpDqWWgX8RysDWeLf6czVxAfZc6tUQxw4n8tXYhtAIRWsZ_6xOVSIho6LeB7Aurg_cblDq149FlhM79BBVKIprlZSGLdRG4usyNA7NdMB4MUwIkx_tOCj-VDyTMAknGDk7cyUTqTmfZWu9v4G27eKYyAWkED0MRHgQJ7S4MAgdiehdUkGat_Al3wQZ7Hq3nntLQW81a0fHTfzx6ukZVEL6dUf3gnpfxiT6lZvZlgbEjAPqddZIRaMsZzyRswTHRhGcVbSaI47w79j6qsYflPv17y8m3V5ChOB_TYfW-T3z-vv-apolUF57lD6tqAuoYQWNY1kC2CM9-bMer1d4_izN0NYzqgIXn-uHnOedYA_v71uPDIvfyEVg6JyA2qUaC4zJB9gsVHFJ08NooRv4qA6VfRpuCKJpyBgooUdSlMjMz4hiREkQNvzN5WQn8JnS0_zGC_9FEf1ARxWa06sgTiHK9chBAzrmTe_z8mPaXkCgTXZgJQ-orG6cmHzVD3oTdLaSjRHqNgZsziCAIHYe9MwBsiGvOhqL1k20yMU9id0XaHa-N0oHVqlao3bHiN5aYYoXOujOlLC8hNt3i-1aflpliWt-gQfiIq0T_rv10UmQJ8QX5QQvBlev5vOQwVxkYRiWCXvsq3b5gBCpssA0QU8n2rfEtb0ggXlD46P6WrPL2cGtizUO0k3u8yyJ9Nslm3g4Ki_wj4ZXCM6MXD_EN0ope1ZhwrjXQKNRL6BVh2FY7VD3KnM3bA_dZNKbTg9kAl1EpFHJvDofRCoLy0sWUrHq8yPS5DpLYQInHiQjtxvRExkJXGKQvP2SgcLzKJLW8xYU7mKZ1xXZ1hiQO1gIgCRyF3wxdUIFrIi5ItpGK4f9PjhZaYph-mpl6UccTlNXpASeyBUA1kzxR0kEvMpudt-pSe6-JwTaW4vLmzF1fmDthd0X97NeG2n7utzotCLOeytxjKdett4elLgdCXJOa39eOmZ=w1920-h853" alt="Image">
            <br>
            <h3 class="header3 margin">CONTACT</h3>
            <p style="white-space: nowrap;"><span class="contact bold">Address:&nbsp;&nbsp;</span>{{ $resume->address }}</p>
            <p stle="white-space: nowrap;margin: 0;"><span class="contact bold">Phone:&nbsp;&nbsp;</span>{{ $resume->phone }}</p>
            <p style="white-space: nowrap;margin: 0;"><span class="contact bold">Email:&nbsp;&nbsp;</span>{{ $resume->email }}</p>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3 margin">SKILLS</h3>
            
            <p >{{ json_decode($resume->additional_skills)->{1} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{2} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{3} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{4} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{5} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{6} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{7} }}</p>
            <p >{{ json_decode($resume->additional_skills)->{8} }}</p>
            
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3 margin">EDUCATION</h3>
            <p>{{ $resume->education }}</p>
            <div style="width: 100%;  border: 1px solid;"></div>
            <h3 class="header3 margin">WORK HISTORY</h3>
            <p class="bold">{{ json_decode($resume->work_history)->{1} }}</p>
            <p class="bold">{{ json_decode($resume->work_history)->{2} }}</p>
        </div>
    </div>
</body>
</html>