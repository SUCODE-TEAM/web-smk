import { Building2, History, Award, Globe, Network, Car, Palette, Zap, Cog, HardHat, Radio, Map as MapIcon, ChevronRight } from "lucide-react";
import { clsx, type ClassValue } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs));
}

export const getLucideIcon = (name: string, className?: string) => {
  const props = { className };
  switch (name) {
    case "Network": return <Network {...props} />;
    case "Car": return <Car {...props} />;
    case "Palette": return <Palette {...props} />;
    case "Zap": return <Zap {...props} />;
    case "Cog": return <Cog {...props} />;
    case "Building2": return <Building2 {...props} />;
    case "HardHat": return <HardHat {...props} />;
    case "Radio": return <Radio {...props} />;
    case "Map": return <MapIcon {...props} />;
    default: return <Building2 {...props} />;
  }
};
