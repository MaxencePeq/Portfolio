import { useEffect, useRef } from "react";
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css";
import Bookbox from "../box/bookbox";

type Image = { src: string; title: string };
type SliderProps = { images: Image[]; darkmode: boolean };

export default function Slider({ images, darkmode }: SliderProps) {
  const splideRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!splideRef.current) return;

    const splide = new Splide(splideRef.current, {
      type: "loop",
      drag: false,
      perPage: 4,
      gap: "1rem",
      arrows: false,
      pagination: false,
      autoScroll: {
        speed: 1,
        pauseOnHover: false,
        pauseOnFocus: false,
      },
    });

    splide.mount({ AutoScroll });

    return () => {
      splide.destroy();
    };
  }, [darkmode, images]);

  return (
    <div ref={splideRef} className="splide w-full h-auto">
      <div className="splide__track">
        <ul className="splide__list">
          {images.map((img, index) => (
            <li
              key={index}
              className="splide__slide flex items-center justify-center"
            >
              <Bookbox
                darkmode={darkmode}
                image={
                  <img
                    src={img.src}
                    alt={img.title}
                    className=" h-42 object-contain rounded-lg max-w-full"
                  />
                }
                booktitle={img.title}
              />
            </li>
          ))}
        </ul>
      </div>
    </div>
  );
}
