type DarkboxProps = {
  darkmode: boolean;
  content: React.ReactNode;
};

export default function Darkbox({ darkmode, content }: DarkboxProps) {
  let bgColor = "bg-[#2563EB]";
  let borderColor = "border-gray-300";

  if (darkmode) {
    bgColor = "bg-[#2D2D44]";
    borderColor = "border-gray-700";
  }

  const responsiveClasses = `xl:max-w-[1100px] xl:min-w-[1100px]`;
  const hover = "hover:-translate-y-[2px] transition-transform duration-200";

  return (
    <div
      className={`${bgColor} flex-wrap shadow-sm p-[3rem] border-1 ${borderColor} rounded-2xl ${responsiveClasses} ${hover}`}
    >
      {content}
    </div>
  );
}
