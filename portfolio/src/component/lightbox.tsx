type LightboxProps = {
  darkmode: boolean;
  image: React.ReactNode;
};

export default function Lightbox({ darkmode, image }: LightboxProps) {
  let bgColor = "bg-white";
  let borderColor = "border-white";

  if (darkmode) {
    bgColor = "bg-[#3A3A5A]";
    borderColor = "border-gray-600";
  }

  const responsiveClasses = ``;
  const hover = "hover:-translate-y-[1px] transition-transform duration-100";

  return (
    <>
      <div
        className={`${bgColor} flex-wrap p-3 border-1 ${borderColor} rounded-xl flex justify-center items-center ${responsiveClasses} ${hover}`}
      >
        {image}
      </div>
    </>
  );
}
