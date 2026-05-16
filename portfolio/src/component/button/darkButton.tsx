type buttonProps = {
  darkmode: boolean;
  text: string;
  dark: boolean;
  to?: string;
};

export default function darkButton({ darkmode, text, dark, to }: buttonProps) {
  let backgroundColor = dark ? "bg-[#4DA6FF]" : "bg-[#3A3A5A]";
  let textColor = "text-white";
  let borderColor = dark ? "border-[#BFF0FB]" : "border-[#61617B]";

  if (!darkmode) {
    backgroundColor = dark ? "bg-[#BFF0FB]" : "bg-white";
    textColor = "text-[#2563EB]";
    borderColor = "";
  }

  const hover = "hover:-translate-y-[2px] transition-transform duration-200";

  return (
    <div className={`${hover}`}>
      <a
        href={to}
        className={`shadow-sm  ${backgroundColor} ${textColor} font-semibold border-1 ${borderColor} rounded-lg cursor-pointer text-lg py-2 px-4`}
      >
        {text}
      </a>
    </div>
  );
}
