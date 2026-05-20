type DarkboxProps = {
  darkmode: boolean;
  content: React.ReactNode;
  number?: number;
};

export default function Darkbox({ darkmode, content, number }: DarkboxProps) {
  let bgColor = "bg-[#2563EB]";
  let borderColor = "border-gray-300";
  let numberBorderColor = "border-[#1e40af]";

  if (darkmode) {
    bgColor = "bg-[#2D2D44]";
    borderColor = "border-gray-700";
    numberBorderColor = "border-[#1E1E30]";
  }

  const responsiveClasses = `w-full max-w-[1100px] min-w-0 mx-auto`;
  const hover = "hover:-translate-y-[2px] transition-transform duration-200";

  return (
    <div
      className={`${bgColor} relative flex-wrap shadow-sm p-5 sm:p-8 lg:p-12 border-1 ${borderColor} rounded-2xl ${responsiveClasses} ${hover}`}
    >
      {number !== undefined && (
        <span
          className={`absolute top-3 right-3 flex h-8 w-8 items-center justify-center rounded-full bg-transparent border-2 ${numberBorderColor} text-sm font-bold text-white`}
        >
          {number}
        </span>
      )}

      {content}
    </div>
  );
}
