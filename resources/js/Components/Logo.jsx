export const Logo = ({ width = '75px', height = '75px', url='', settings }) => {
    return (
        <a href="">
            <img
            style={{ width: width, height: height }}
            src={`/storage/${settings['logo']}` || ""}
            className="img-fluid"
            alt={settings['title']}
        />
        </a>
    )
}