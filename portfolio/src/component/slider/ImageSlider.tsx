import { useEffect, useRef } from "react";
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css";

type Image = { src: string; alt: string };
type SliderProps = { images: Image[] };

export default function Slider({ images }: SliderProps) {
  const splideRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!splideRef.current) return;

    const splide = new Splide(splideRef.current, {
      type: "loop",
      drag: false,
      perPage: 3,
      gap: "1rem",
      arrows: false,
      pagination: false,
      autoScroll: {
        speed: 1, // vitesse du défilement (ajuste à ton goût)
        pauseOnHover: false,
        pauseOnFocus: false,
      },
    });

    splide.mount({ AutoScroll });

    return () => {
      splide.destroy();
    };
  }, []);

  return (
    <div ref={splideRef} className="splide w-full h-auto">
      <div className="splide__track">
        <ul className="splide__list">
          {images.map((img, index) => (
            <li
              key={index}
              className="splide__slide flex items-center justify-center"
            >
              <img
                src={img.src}
                alt={img.alt}
                className="h-32 object-contain rounded-lg max-w-full"
              />
            </li>
          ))}
        </ul>
      </div>
    </div>
  );
}
