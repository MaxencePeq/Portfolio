type bookboxProps = {
  darkmode: boolean;
  image: React.ReactNode;
  ImageBlockingHeight?: boolean;
  booktitle: string;
};

export default function Bookbox({
  darkmode,
  image,
  ImageBlockingHeight,
  booktitle,
}: bookboxProps) {
  const bgColor = darkmode ? "bg-[#3A3A5A]" : "bg-white";
  const borderColor = darkmode ? "border-gray-600" : "border-white";
  const textColor = darkmode ? "text-[#B8B8B8]" : "text-[#334155]";

  let h;
  if (ImageBlockingHeight) {
    h = "h-32";
  }
  return (
    <div>
      <div
        className={`${bgColor} ${h} p-7 lg:max-w-50 lg:min-w-50 lg:max-h-65  border ${borderColor} rounded-xl flex flex-col gap-y-4 justify-center items-center text-center overflow-hidden}`}
      >
        {image}
        <p className={`${textColor} text-sm font-semibold`}>{booktitle}</p>
      </div>
    </div>
  );
}
