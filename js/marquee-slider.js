const root = document.documentElement;
let marqueeSliders = document.querySelectorAll(".marquee");
marqueeSliders.forEach((slider) => {
  const marqueeElementsDisplayed = getComputedStyle(slider).getPropertyValue(
    "--marquee-elements-displayed"
  );
  const marqueeContent = slider.querySelector("ul.marquee-content");

  if (marqueeContent) {
    slider.style.setProperty(
      "--marquee-elements",
      marqueeContent.children.length
    );

    for (let i = 0; i < marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
  }
});

// const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue(
//   "--marquee-elements-displayed"
// );
// const marqueeContent = document.querySelector("ul.marquee-content");

// if (marqueeContent) {
//   root.style.setProperty("--marquee-elements", marqueeContent.children.length);

//   for (let i = 0; i < marqueeElementsDisplayed; i++) {
//     marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
//   }
// }
