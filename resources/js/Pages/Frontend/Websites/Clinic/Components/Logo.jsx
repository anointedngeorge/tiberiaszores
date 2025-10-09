

import React from 'react'




export const Logo = ({width, height, alt, title, classname}) => {
  return (
    <div className='grid grid-cols-2 justify-between'>
        <a href="/" className={classname}>
        <span style={{margin:'0 5px 0 0'}}><img src={`/sys/logo2.png`} alt={alt || alt}  style={{width: width || 40, height:height||40}}  /></span>
        <span>{title}</span>
        </a>
    </div>
  )
}
