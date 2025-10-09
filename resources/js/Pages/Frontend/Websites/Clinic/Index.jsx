import { About } from "./Components/About";
import ClientFrontendLayout from "./Components/ClientFrontendLayout";
import { HeroPage } from "./Components/Hero";
import { HeroPage1 } from "./Components/Hero1";
import { Services } from "./Components/Services";
import { Testimonials } from "./Components/Testimonials";
import { WhyChooseUs } from "./Components/WhyChooseUs";





export default function Index({ website }) {
    return (
       <ClientFrontendLayout>
            <HeroPage1 />
            <About />
            <Services />
            <WhyChooseUs />
            <Testimonials />
       </ClientFrontendLayout>

    );
}

