<?php
session_start();
echo $_SESSION['home.php'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>protfolio</title>
    <link rel="stylesheet"
        href="  asset/css/cdnjs.cloudflare.com_ajax_libs_jquery-toast-plugin_1.3.2_jquery.toast.css " />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    </head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&family=Roboto:wght@500;700&display=swap");

:root {
  --clr-text: hsl(0, 0%, 100%);
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Quicksand", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  background: radial-gradient(circle, rgba(115,12,50,1) 5%, rgba(13,12,12,1) 60%);
  min-height: 100vh;
}

section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 60px;
}

.recipe-container {
  background: rgba(189, 181, 181, 0.1);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 25px;
  padding: 30px 0;
  width: min(1200px, 100%);
}

.recipe-container > h1 {
  font-size: 2rem;
  font-weight: 600;
  text-align: center;
  color: #dda3b6;
  margin: 20px 0 40px;
}

.swiper {
  width: 80%;
  height: 100%;
  margin-bottom: 30px;
}

.swiper-scrollbar {
  --swiper-scrollbar-bottom: 0;
  --swiper-scrollbar-drag-bg-color: #dda3b6;
  --swiper-scrollbar-size: 5px;
}

.post {
  max-width: 400px;
  font-size: 1rem;
  font-weight: 500;
  color: var(--clr-text);
  background: rgba(236, 149, 200, 0.2);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 16px 16px 0;
  margin-bottom: 16px;
}

.post-img {
  width: 100%;
  max-width: 400px;
  object-fit: cover;
  overflow: hidden;
  aspect-ratio: 4/3;
  border-radius: 6px;
  user-select: none;
  pointer-events: none;
}

.post-body {
  display: grid;
  grid-template-columns: 15% 60% 20%;
  align-items: center;
  gap: 8px;
  padding: 15px 0;
  cursor: default;
}

.post-name {
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 2px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.post-author {
  width: fit-content;
  font-size: 0.8rem;
  font-weight: 600;
  opacity: 0.6;
  color: var(--clr-text);
}

.post-avatar {
  width: 40px;
  aspect-ratio: 1/1;
  object-fit: cover;
  border-radius: 5px;
  cursor: pointer;
}

.post-actions {
  position: relative;
}

.post-actions-content {
  position: absolute;
  bottom: 130%;
  right: 0;
  padding: 8px;
  border-radius: 8px;
  background: rgba(172, 172, 172, 0.2);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  box-shadow: 2px 2px 10px 2px hsl(0, 0%, 0%, 0.25);
  transition: opacity 0.25s, scale 0.25s;
  transform-origin: bottom right;
}

.post-actions-content[data-visible="false"] {
  pointer-events: none;
  opacity: 0;
  scale: 0;
}

.post-actions-content[data-visible="true"] {
  pointer-events: unset;
  scale: 1;
  opacity: 1;
}

.post-actions-content li {
  padding: 0.5rem 0.65rem;
  border-radius: 0.25rem;
  list-style: none;
}

.post-actions-content li:is(:hover, :focus-within) {
  background-color: rgba(248, 132, 169, 0.7);
}

.post-actions-link {
  width: max-content;
  display: grid;
  grid-template-columns: 1rem 1fr;
  align-items: center;
  gap: 0.6rem;
  color: inherit;
  text-decoration: none;
  cursor: pointer;
}

.post-like {
  text-decoration: none;
  color: var(--clr-text);
  margin-right: 5px;
  font-size: 1.1rem;
  opacity: 0.65;
  border-radius: 50%;
  overflow: hidden;
  transition: all 0.35s ease;
}

.post-actions-controller {
  border: 0;
  background: none;
  color: var(--clr-text);
  cursor: pointer;
  opacity: 0.65;
}

.post-like:hover,
.post-actions-controller:hover {
  opacity: 1;
}

.post-like:focus {
  outline: none;
}

.post-like.active {
  color: rgb(255, 0, 0);
  opacity: 1;
  transform: scale(1.2);
}

/* MEDIA QUERIES */

@media (max-width: 1200px) { 
  .swiper {
      width: 80%;
    }
}

@media (max-width: 900px) {
  #recipes {
    padding: 60px 80px;
  }

  .swiper {
    width: 50%;
  }
}

@media (max-width: 765px) {
  .swiper {
    width: 70%;
  }
}

@media (max-width: 550px) {
  #recipes {
    padding: 40px 40px;
  }

  .swiper {
    width: 80%;
  }
}
.btn {
    width: 140px;
    height: 50px;
    background: radial-gradient(rgba(115,12,50,1) 5%, rgba(13,12,12,1) 60%);
    border: none;
    font-size: 1em;
    text-transform: capitalize;
    margin-left: 150px;
    border-radius: 5px;
    margin-top: 5px;
    float: left;

}
.btn a {
    text-decoration: none;

}

.btn1 {
    width: 140px;
    height: 50px;
    background: radial-gradient(rgba(115,12,50,1) 5%, rgba(13,12,12,1) 60%);
    border: none;
    padding: 15px;
    font-size: 1em;
    text-transform: capitalize;
    margin-left: 600px;
    border-radius: 5px;
    margin-top: 5px;
}
.btn1 a {
    text-decoration: none;

}


</style>
<body>
<section>
      <div class="recipe-container">
        <h1>The Dessert Recipes</h1>
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide post">
              <img
                class="post-img"
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/defebc72-ea17-41c7-9bb6-70b3974a93b7"
                alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/f9d29d0e-f03b-4990-9bc5-ade57a276b41"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Homemade Ice Cream</h2>
                  <p class="post-author">Evelyn Taylor</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post1"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post1"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7443d18f-26b6-47eb-bfca-541fb72cee65" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/3c7b6ef9-cd2d-4d70-819a-2aa9c2309083"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Pancake</h2>
                  <p class="post-author">Ethan Wilson</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post2"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post2"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/24566dbf-61a2-4bd0-bb29-ef1773364eba" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/01332597-5aeb-483b-b682-9379c6ed8f14"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Macaron</h2>
                  <p class="post-author">Bella Smith</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post3"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post3"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img
                class="post-img"
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/a208eb17-a847-4e04-be2c-d7ec2071ae45"
                alt="recipe" />

              <div class="post-body">
                <img class="post-avatar" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/b9f5ef94-c2c9-4792-b7a3-593d393f2c84" alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Cheesecake</h2>
                  <p class="post-author">Mia Dixon</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post4"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post4"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/208fe8f5-9d7f-4b83-9249-43601bb4c500" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/58f9319c-78cf-444b-ba71-701c506c2dd3"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Donuts</h2>
                  <p class="post-author">Olivia Martinez</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post5"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post5"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img
                class="post-img"
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e4f91d6d-ee11-4ff7-9e6f-0fb3f9a78598"
                alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/24ca2eec-a5ba-4c32-907c-ffffca203e1c"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Rolo Cheesecake</h2>
                  <p class="post-author">Benjamin Clark</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post6"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post6"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>update posts</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>delete posts</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar swiper-scrollbar-horizontal" style="transition-duration: 0ms;"><div class="swiper-scrollbar-drag" style="transform: translate3d(187.057px, 0px, 0px); transition-duration: 0ms; width: 45.179px;"></div></div></div>

          <button class="btn"><a href="show posts" style= "color: white">show posts</a></button>

          <button class="btn1"><a href="logout.php" style= "color: white">logout</a></button>

      </div>
    </section>

    


    <script src="main.js"></script>
  </body>
  </html>