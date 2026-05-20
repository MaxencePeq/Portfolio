import Darkbox from "../box/darkbox";
import Slider from "../slider/ImageSlider";

type SectionProps = {
  darkmode: boolean;
};

const images = [
  { src: "/img/illustration/bojangles.jpg", alt: "Bojangles" },
  { src: "/img/illustration/pianist.jpg", alt: "Peinture pianiste" },
];

export default function SectionPassions({ darkmode }: SectionProps) {
  const textColor = darkmode ? "text-[#E0E0E0]" : "text-white";
  const textClasse = `${textColor} text-lg`;
  return (
    <div className="flex flex-col gap-y-4">
      <Darkbox
        darkmode={darkmode}
        content={
          <div className="flex flex-col gap-6">
            <p className={`${textColor} text-3xl font-semibold text-center`}>
              Mes Passions
            </p>
            <div className="flex flex-col gap-4 mt-4">
              <p className={`${textClasse}`}>
                {" "}
                Je cultive depuis maintenant 6 ans mon amour pour la musique et
                plus particulièrement pour le piano. <br />
                La lecture est aussi une passion dévorante, avec les classiques
                français et l'horreur fantastique, mais aussi la peinture
                aquarelle...{" "}
              </p>
              <p className={`${textClasse}`}>
                Pour les intéressé·es, voici une petite sélection de mes
                lectures favorites :
              </p>
            </div>
          </div>
        }
      />
      <Darkbox darkmode={darkmode} content={<Slider images={images} />} />
    </div>
  );
}
