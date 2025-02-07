---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home
author_profile: true
title: Home
excerpt: "Croeso/Welcome. Please contact us for more info"
header:
  overlay_image: /docs/assets/images/hhead.jpg
  caption: "Photo credit: Beresford Adams"
  actions:
    - label: "Contact Us"
      url: "mailto:rhwyfocaergybi@gmail.com"
    - label: "Join/Taster"
      url: "https://docs.google.com/forms/d/e/1FAIpQLSf6uWSjHYmK6nv0aIPdKx-RXpDN-R-7Iy33QusrgKHnicPHrg/viewform?usp=header"
consent: "https://docs.google.com/forms/d/e/1FAIpQLSf6uWSjHYmK6nv0aIPdKx-RXpDN-R-7Iy33QusrgKHnicPHrg/viewform?usp=header"
#classes: wide
sidebar:
  nav: "sidenav"
toc: true
toc_label: "Contents"
toc_icon: "cog"
---
This is an exciting time for us, for coastal rowing and for Caergybi/Holyhead! We're forming a new rowing club in what is potentially one of the best venues in the UK for coastal rowing.
<img src="/docs/assets/images/ynyslawd.jpg" alt="Ynys Lawd" width="500">

Holyhead has a rich maritime tradition and rowing races took place regularly between the crews of the mail boats! More recently, the Sea Cadet unit have had much success in "pulling" races in the ASCs and now the Trinity class of boats. If you've previously rowed these boats, we'd love to hear from you. One thing is for certain, the celtic longboats are much nicer to row than the old ASCs!

<img src="/docs/assets/images/rowforgaz.jpg" alt="Row For Gaz Image" width="500">

We want to re-establish this amazing sport, initially with the celtic longboats and share it with anyone from the local area who'd like to have a go. Contact us for more details...

<h1 class="col-header dark-orange">All posts</h1>
{% for post in site.posts %}
<div class="post-preview">
 <img class="post-preview__left" src="{{ post.image }}" alt="{{ page.image_alt }}">
 <div class="post-preview__right">
   <a class="preview-title" href="{{ post.url }}">{{ post.title }}</a>
   <span>{{ post.date | date: "%b %d, %Y" }}</span>
   <div class="tag-group">
     {% for tag in post.tags %}
       <div class="tag"><span class="tag-text">{{ tag }}</span></div>
     {% endfor %}
   </div>
 </div>
</div>
{% endfor %}